<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Méthode non autorisée']);
    exit;
}

if (empty(MISTRAL_API_KEY)) {
    http_response_code(500);
    echo json_encode(['error' => 'Configuration manquante']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);
$userMessage = $data['message'] ?? '';

if (empty($userMessage)) {
    echo json_encode(['error' => 'Message vide']);
    exit;
}

// Contexte du portfolio 
$portfolioContext = "Matthis is a second-year computer science BUT student in Metz, passionate about web development. He obtained
his general baccalaureate with honors, specializing in Mathematics, NSI, and Physics and Chemistry. His favorite framework is Symfony,
and his favorite language is TypeScript.

In terms of professional experience, he worked for nine weeks at La Poste as a mail carrier and is currently completing an internship at
LIST, within the Science Department. He has also volunteered with the SNU at Fort Wagner, where he participated
in renovation work and organized guided tours.

Here's some information about their projects:

Best Project: Interactive Portfolio, a group school project. The goal was to create a portfolio for a graphic designer, fully manageable
via a dashboard. The creations are automatically positioned according to the available space on the page. The site also includes a like,
comment, and share system, as well as a login/registration module and various forms. Built with Symfony, primarily PHP and CSS.

Personal project: Finna, a financial management tool that lets you create categories for your transactions and track account flows.
Developed in PHP with a CSS interface.

Personal Project 2: To Do List, a task organization application also made in PHP and CSS.

Focusly: Another major school project, developed in pairs. It includes a task management system based on a Kanban board,
an automated Discord notification system, a Pomodoro timer, and gamification rewarding the number of completed tasks.
Developed with Symfony.

Post-AR: A school project conducted in collaboration with Dutch and Spanish students. The goal was to create a modern and responsive 
interface in React for a postcard management website.

You can contact him by email using the form at the bottom of his portfolio. His projects are accessible from the Projects section: clicking
on each project reveals the corresponding GitHub repositories. His LinkedIn and GitHub profiles are also accessible via the buttons at the 
top of the site.";


$prompt = "You are Matthis's portfolio assistant. Your role is to answer questions about Matthis's work and experience. If the user speaks 
to you in French, answer him in French, otherwise speak English. If the question is unclear, vague, or not related to the portfolio, 
respond with: 'I'm sorry, I couldn't understand your question. Could you please rephrase it or ask something specific about Matthis'portfolio?'

IMPORTANT: Keep your responses as brief as possible (maximum 2-3 sentences). Only provide additional details if specifically asked.

Context: $portfolioContext

Question: $userMessage

Answer:";

$ch = curl_init('https://api.mistral.ai/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . MISTRAL_API_KEY
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'model' => 'mistral-small',
    'messages' => [
        ['role' => 'system', 'content' => 'You are Matthis\'s portfolio assistant. Keep responses brief and concise.'],
        ['role' => 'user', 'content' => $prompt]
    ],
    'max_tokens' => 150
]));

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200) {
    $responseData = json_decode($response, true);
    $botResponse = $responseData['choices'][0]['message']['content'] ?? "I'm sorry, I couldn't generate a response. Please try again.";
} else {
    $botResponse = "I'm sorry, I'm experiencing technical difficulties. Please try again later.";
}

echo json_encode(['response' => $botResponse]);
