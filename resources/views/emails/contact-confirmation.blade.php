<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h2>Thank You for Contacting PT Tropical Natural Sugar</h2>

    <p>Dear {{ $contact->name }},</p>

    <p>We have received your message and our team will respond shortly.</p>

    <hr>

    <p><strong>Subject:</strong> {{ $contact->subject }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contact->message }}</p>

    <br>
    <p>Best regards,<br>
        PT Tropical Natural Sugar</p>
</body>

</html>