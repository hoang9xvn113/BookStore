<?php

namespace Core;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Helper
{
    public static function sendEmail($mailAddress, $message) {
        try {
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com";
            $mail->Port = "465";
            $mail->isHTML();
            $mail->Username = "nguyenvanhoang11122000@gmail.com";
            $mail->Password = "Lttbcltcf123";
            $mail->setFrom("no-reply@howcode.org");
            $mail->Subject = "ABCBook Company ";
            $mail->Body = $message;
            $mail->addAddress($mailAddress);
    
            $mail->send();
            $status = true;

        } catch (Exception $e) {
            $status = false;
        }
        return $status;
    }

    public static function getParams(string $stringParams): array
    {
        $params = explode('&', $stringParams);

        $data = [];

        foreach($params as $value) {
            $value = explode('=', $value);
            if (count($value) == 2) {
                $data[$value[0]] = $value[1];
            }
        }

        return  $data;
    }

    /**
     * @return void Trả về cảnh báo của thêm
     */
    public static function checkAddStatus(bool $status): void {
        if ($status) {
            $message = "Thêm thành công";
        } else {
            $message = "Thêm không thành công";
        }
        echo "<script>alert('$message') </script>";
    }

    /**
     * @return void Trả về cảnh báo của chỉnh sửa
     */
    public static function checkEditStatus(bool $status): void {
        if ($status) {
            $message = "Sửa thành công";
        } else {
            $message = "Sửa không thành công";
        }
        echo "<script>alert('$message') </script>";
    }

    public static function checkDeleteStatus(bool $status): void {
        if ($status) {
            $message = "Xóa thành công";
        } else {
            $message = "Xóa không thành công";
        }
        echo "<script>alert('$message') </script>";
    }

    public static function checkSendStatus(bool $status): void {
        if ($status) {
            $message = "Gửi thành công";
        } else {
            $message = "Gửi không thành công";
        }
        echo "<script>alert('$message') </script>";
    }

    /**
     * @return string Trả về trạng thái
     */
    public static function checkStatus(int $status): string {
        if ($status == 1) {
            $message = "Active";
            $class = "bg-success";
        } else if ($status == 0) {
            $message = "Unactive";
            $class = "bg-warning";
        } else if ($status == -1) {
            $message = "cancel";
            $class = "bg-danger";
        }

        return "<small class='btn-1 $class'>$message</small>";
    }

    public static function checkEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function checkPhone($phone) {
        $pattern = "/^0[0-9]{9,12}/i";
        return preg_match($pattern, $phone);
    }

    public static function checkImage($type) {
        $type = strtolower($type);
        $types = [
            "jpeg",
            "jpg",
            "png",
            "webp",
            "pdf",
            "gif",
            "jfif",
        ];

        return array_search($type, $types) == null ? false : true;
    }


    public static function dowloadImage($image) {
        [$name, $type] = explode('.', $image['name']);
        $target_file =  BOOKIMAGES_PATH . $image['name'];

        if (self::checkImage(strtolower($type))) {
            $status = move_uploaded_file($image['tmp_name'], $target_file);
            return $status ? $image['name'] : false;
        }

        return false;
        
    }

    static function checkSex($sex) {
        return $sex ? "Nữ" : "Nam";
    }
}


