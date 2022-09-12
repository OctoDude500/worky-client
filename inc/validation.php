<?php
$name = $email_one = $email_two = $phone = $language = $workplace = $attempts = $location = "";
$nameErr = $email_oneErr = $email_twoErr = $phoneErr = $languageErr = $workplaceErr = $attemptsErr = $locationErr = "";

if (isset($_POST['submit'])) {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = filter_input(
            INPUT_POST,
            "name",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["email_one"])) {
        $email_oneErr = "Email is required";
    } else {
        $email_one = filter_input(
            INPUT_POST,
            "email_one",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["email_two"])) {
        $email_twoErr = "Email confirmation is required";
    } else {
        $email_two = filter_input(
            INPUT_POST,
            "email_two",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = filter_input(
            INPUT_POST,
            "phone",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["language"])) {
        $languageErr = "Language is required";
    } else {
        $language = filter_input(
            INPUT_POST,
            "language",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["workplace"])) {
        $workplaceErr = "Workplace is required";
    } else {
        $workplace = filter_input(
            INPUT_POST,
            "workplace",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["attempts"])) {
        $attemptsErr = "Attempts is required";
    } else {
        $attempts = filter_input(
            INPUT_POST,
            "attempts",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST["location"])) {
        $locationErr = "Location is required";
    } else {
        $location = filter_input(
            INPUT_POST,
            "location",
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
}
