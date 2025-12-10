<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #dbeafe, #e0f2fe);
            margin: 0;
            margin-top: 30px;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        }

        .profile-box {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            background-color: #e0e7ff;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            color: #4f46e5;
        }

        h2 {
            margin: 10px 0 5px;
            font-size: 24px;
            color: #1f2937;
        }

        .info-label {
            font-size: 14px;
            color: #6b7280;
        }

        .info-value {
            font-size: 16px;
            margin-bottom: 15px;
            color: #111827;
        }

        a.button {
            display: inline-block;
            margin: 5px;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3b82f6;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #2563eb;
        }

        table tr td{
            padding: 10px;
        }
    </style>
</head>
<body>