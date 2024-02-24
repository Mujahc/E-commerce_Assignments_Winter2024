<?php

namespace app\controllers;

use app\models\Message;

class Contact extends Controller
{
    public function index(){
        $this->view('Contact/index');
    }

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Extract data from POST request
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // Create a new Message object
            $messageModel = new Message();
            $messageModel->name = $name;
            $messageModel->email = $email;
            $messageModel->IP = $_SERVER['REMOTE_ADDR'];
            $messageModel->message = $message;

            // Write the message to the file
            $messageModel->write();

            // Redirect to the read page
            header('location:/Contact/read');
            exit;
        } else {
            // Handle invalid request method (e.g., display an error message)
            throw new \Exception('Invalid request method');
        }
    }

    public function read() {
        // Create a new Message object
        $messageModel = new Message();

        // Read messages from the file
        $messages = $messageModel->read();

        // Pass data to the view
        $this->view('Contact/read', ['messages' => $messages]);
    }
}