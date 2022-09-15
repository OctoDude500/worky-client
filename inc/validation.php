<?php
$name = $email_one = $email_two = $phone = $language = $workplace = $attempts = $location = "";
$nameErr = $email_oneErr = $email_twoErr = $phoneErr = $languageErr = $workplaceErr = $attemptsErr = $locationErr = "";

$errors = [];
$values = [];
$is_success = null;

if (isset($_POST['submit'])) {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $errors[] = $nameErr;

    } else {

        $name = filter_input(
            INPUT_POST,
            "name",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $values[] = $name;
    }

    if (empty($_POST["email_one"])) {
        $email_oneErr = "Email is required";
        $errors[] = $email_oneErr;
    } else {
        $email_one = filter_input(
            INPUT_POST,
            "email_one",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $values[] = $email_one;

    }

    if (empty($_POST["email_two"])) {
        $email_twoErr = "Email confirmation is required";
        $errors[] = $email_twoErr;
    } else {
        $email_two = filter_input(
            INPUT_POST,
            "email_two",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $values[] = $email_two;

    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
        $errors[] = $phoneErr;
    } else {
        $phone = filter_input(
            INPUT_POST,
            "phone",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $values[] = $phone;
    }

    if (empty($_POST["language"])) {
        $languageErr = "Language is required";
        $errors[] = $languageErr;
    } else {
        $language = filter_input(
            INPUT_POST,
            "language",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $values[] = $language;
    }

    if (empty($_POST["workplace"])) {
        $workplaceErr = "Workplace is required";
        $errors[] = $workplaceErr;
    } else {
        $workplace = filter_input(
            INPUT_POST,
            "workplace",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $values[] = $workplace;
    }

    if (empty($_POST["attempts"])) {
        $attemptsErr = "Attempts is required";
        $errors[] = $attemptsErr;
    } else {
        $attempts = filter_input(
            INPUT_POST,
            "attempts",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $values[] = $attempts;
    }

    if (empty($_POST["location"])) {
        $locationErr = "Location is required";
        $errors[] = $location;
    } else {
        $location = filter_input(
            INPUT_POST,
            "location",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $values[] = $location;
    }

    if(empty($errors)) {
        $curl_handle = curl_init();
        curl_setopt($curl_handle,CURLOPT_URL, "http://localhost:8000/testing");
        curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, "name=$name&email=$email_one&email_confirm=$email_two&phone=$phone&language=$language&work=$workplace&attempts=$attempts&location=$location");
        $res = curl_exec($curl_handle);
        curl_close($curl_handle);
        if ($res) {
            echo "success message";
            $is_success = true;
        }
    } else {
        $is_success = false;
    }

}
//echo "is errors" . var_dump($errors);
//echo "is not errors" . var_dump($values);


