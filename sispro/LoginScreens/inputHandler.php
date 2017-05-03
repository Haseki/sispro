<?php

/**
 * Description of inputHandler
 *
 * @author Hakan Oğuz Vural 
  14011610
 */
class inputHandler {

    //put your code here
    function format_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function control($data) {

        if ($data == "E-001") {
            echo 'Boş veri girdiniz';
            return false;
        } else
        if ($data == "E-002") {
            echo 'Yanlış veri girdiniz : ' . $data . '<br>';
            return false;
        } else
        if ($data == "E-003") {
            echo 'Dosya Problemi : ' . $data . '<br>';
            return false;
        } else {
            return true;
        }
    }

    function test_input($data, $type) {

        if ($type == "TEXT") {

            if (!empty($data)) {
                return $data;
            } else {
                return "E-001";
            }
        }

        if ($type == "NULL") {
            return $data;
        }

        if ($type == "NUMBER-NULL") {
            if (empty($data)) {
                return $data;
            } else
            if (!is_numeric($data)) {
                return "E-002";
            } else {
                return $data;
            }
        }

        if ($type == "NUMBER-FULL") {
            if (!empty($data)) {
                if (!is_numeric($data)) {
                    echo 'Not Numeric the data ->' . $data . '<br>';
                    return "E-002";
                } else {
                    return $data;
                }
            } else {
                return "E-001";
            }
        }
        
        

        if ($type == "MAIL") {
            if (!empty($data)) {
                if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                    echo 'Thats not an email : ' . $data . '<br>';
                    return "E-002";
                } else {
                    return $data;
                }
            } else {
                return "E-001";
            }
        }

        if ($type == "FOTO") {
            try {

                // Undefined | Multiple Files | $_FILES Corruption Attack
                // If this request falls under any of them, treat it invalid.
                if (
                        !isset($_FILES['postPicture']['error']) ||
                        is_array($_FILES['postPicture']['error'])
                ) {
                    throw new RuntimeException('Invalid parameters.');
                }

                // Check $_FILES['postPicture']['error'] value.
                switch ($_FILES['postPicture']['error']) {
                    case UPLOAD_ERR_OK:
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        throw new RuntimeException('No file sent.');
                    case UPLOAD_ERR_INI_SIZE:
                    case UPLOAD_ERR_FORM_SIZE:
                        throw new RuntimeException('Exceeded filesize limit.');
                    default:
                        throw new RuntimeException('Unknown errors.');
                }
                // You should also check filesize here. 
                if ($_FILES['postPicture']['size'] > 1000000) {
                    throw new RuntimeException('Exceeded filesize limit.');
                }
                // You should name it uniquely.
                // DO NOT USE $_FILES['postPicture']['name'] WITHOUT ANY VALIDATION !!
                // On this example, obtain safe unique name from its binary data.

                $img_type = substr($_FILES['postPicture']['type'], 6, 20);

                $date = time();
                $fname = "IMG_" . $date . "." . $img_type;
                $ftmp_name = $_FILES['postPicture']['tmp_name'];
                if (!move_uploaded_file(
                                $_FILES['postPicture']['tmp_name'], "uploads/" . $fname)
                ) {
                    throw new RuntimeException('Failed to move uploaded file.');
                }

                $file_dir = "../uploads/" . $fname;
                return $file_dir;
            } catch (RuntimeException $e) {
                echo $e->getMessage();
                echo '<br>';
                return "E-003";
            }
        }
    }

    function ready_input($data, $type) {
        $data = $this->format_input($data);
        $data = $this->test_input($data, $type);

        if (!$this->control($data)) {
            $GLOBALS['error'] = $GLOBALS['error'] + 1;
            echo 'hata : '.$data;
        }

        return $data;
    }

}
