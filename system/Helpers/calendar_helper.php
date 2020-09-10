<?php

function get_dropdown_time()
{
    for ($x = 1; $x <= 23; $x++) {
        if ($x < 10) {
            echo "<option value=0" . $x . ":00:00>0" . $x . ":00 AM</option>";
        } else {
            if ($x >= 12) {
                echo "<option value=" . $x . ":00:00>" . $x . ":00 PM</option>";
            } else {
                echo "<option value=" . $x . ":00:00>" . $x . ":00 AM</option>";
            }
        }
    }
}

function get_dropdown_media_online()
{
    $db = \Config\Database::connect();

    $condition = "type_id = 1";
    $query = $db->table('meeting_sub_type')->getWhere($condition);

    foreach ($query->getResult('array') as $on) {
        echo "<option value=" . $on['id'] . ">" . $on['meeting_subtype'] . "</option>";
    }
}

function get_dropdown_media_offline()
{
    $db = \Config\Database::connect();

    $condition = "type_id = 2";
    $query = $db->table('meeting_sub_type')->getWhere($condition);

    foreach ($query->getResult('array') as $off) {
        echo "<option value=" . $off['id'] . ">" . $off['meeting_subtype'] . "</option>";
    }
}

function get_dropdown_esalon_2()
{
    $db = \Config\Database::connect();
    $query = $db->query('SELECT * FROM view_user_department');
    foreach ($query->getResultArray() as $d) {
        echo "<option value=" . $d['id'] . ">" . $d['department_name'] . "</option>";
    }
}

function get_data_calendar()
{
    $hostname = 'localhost';
    $username = 'root';
    $password = '';

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=erapat", $username, $password);

        $query = "select * from view_user_meeting";

        $stmt = $dbh->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $values = array();

        for ($row = 0; $row < count($result); $row++) {
            if ($result[$row]['meeting_type'] == 'Online') {
                $color = '#28a745';
            }
            if ($result[$row]['meeting_type'] == 'Offline') {
                $color = '#dc3545';
            }
            if ($result[$row]['request_status'] == '1') {
                $color = '#000000';
            }
            $values[] = array(
                '_id' => $result[$row]['sub_department_id'],
                'title' => $result[$row]['sub_department_name'],
                'bagid' => $result[$row]['department_id'],
                'media' => $result[$row]['meeting_type'],
                'submedia' => $result[$row]['meeting_subtype'],
                'submediaid' => $result[$row]['sub_type_id'],
                'otherid' => $result[$row]['other_online_id'],
                'calendar' => $result[$row]['meeting_type'],
                'zoomid' => $result[$row]['zoomid'],
                'speakers_name' => $result[$row]['speakers_name'],
                'members_name' => $result[$row]['members_name'],
                'agenda' => $result[$row]['agenda'],
                'start' => implode("T", array($result[$row]['start_date'], $result[$row]['start_time'])),
                'end' => implode("T", array($result[$row]['end_date'], $result[$row]['end_time'])),
                'type' => $result[$row]['sub_type_id'],
                'statuses' => $result[$row]['request_status'],
                'className' => 'colorAppointment',
                'username' => $result[$row]['name'],
                'location' => $result[$row]['meeting_subtype'],
                'backgroundColor' => $color,
                'textColor' => '#ffffff',
                'allDay' => false
            );
        }

        $to_encode = array(
            array(
                'key' => 'data',
                'value' => $values,
            )
        );
        echo json_encode($to_encode, true);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
