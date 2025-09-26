<?php
// ...existing code...
<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TMS - Login test</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>body{font-family:Arial,Helvetica,sans-serif;margin:24px}label{display:block;margin-top:8px}input{padding:6px;width:260px}button{margin-top:12px;padding:8px 12px}#out{white-space:pre-wrap;margin-top:16px;border:1px solid #ddd;padding:12px;background:#f9f9f9}</style>
</head>
<body>
<h2>Admin login debug</h2>
<p>Use this form to POST to <code>admin/index.php</code> and inspect the raw response and HTTP status.</p>

<form id="debugForm">
    <label>Username
        <input name="username" id="username" value="admin">
    </label>
    <label>Password
        <input name="password" id="password" value="admin123" type="password">
    </label>
    <label>
        <input type="checkbox" id="sendAsForm" checked> Send as normal form POST (application/x-www-form-urlencoded)
    </label>
    <div>
        <button type="button" id="sendBtn">Send POST to admin/index.php</button>
    </div>
</form>

<div id="out">Response will appear here...</div>

<script>
async function send() {
    const out = document.getElementById('out');
    out.textContent = 'Sending...';
    const url = 'admin/index.php';
    const uname = document.getElementById('username').value;
    const pwd = document.getElementById('password').value;
    const sendAsForm = document.getElementById('sendAsForm').checked;

    try {
        let resp;
        if (sendAsForm) {
            const form = new URLSearchParams();
            form.append('username', uname);
            form.append('password', pwd);
            resp = await fetch(url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: form.toString(),
                credentials: 'same-origin'
            });
        } else {
            resp = await fetch(url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ username: uname, password: pwd }),
                credentials: 'same-origin'
            });
        }

        const text = await resp.text();
        out.textContent = 'HTTP ' + resp.status + ' ' + resp.statusText + '\n\n' + text;
    } catch (err) {
        out.textContent = 'Fetch error: ' + err;
    }
}

document.getElementById('sendBtn').addEventListener('click', send);
</script>
</body>
</html>
// filepath: c:\wamp64\www\alkarajan\Tourism-Management-System-PHP\tms\index.php
// ...existing code...
<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TMS - Login test</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>body{font-family:Arial,Helvetica,sans-serif;margin:24px}label{display:block;margin-top:8px}input{padding:6px;width:260px}button{margin-top:12px;padding:8px 12px}#out{white-space:pre-wrap;margin-top:16px;border:1px solid #ddd;padding:12px;background:#f9f9f9}</style>
</head>
<body>
<h2>Admin login debug</h2>
<p>Use this form to POST to <code>admin/index.php</code> and inspect the raw response and HTTP status.</p>

<form id="debugForm">
    <label>Username
        <input name="username" id="username" value="admin">
    </label>
    <label>Password
        <input name="password" id="password" value="admin123" type="password">
    </label>
    <label>
        <input type="checkbox" id="sendAsForm" checked> Send as normal form POST (application/x-www-form-urlencoded)
    </label>
    <div>
        <button type="button" id="sendBtn">Send POST to admin/index.php</button>
    </div>
</form>

<div id="out">Response will appear here...</div>

<script>
async function send() {
    const out = document.getElementById('out');
    out.textContent = 'Sending...';
    const url = 'admin/index.php';
    const uname = document.getElementById('username').value;
    const pwd = document.getElementById('password').value;
    const sendAsForm = document.getElementById('sendAsForm').checked;

    try {
        let resp;
        if (sendAsForm) {
            const form = new URLSearchParams();
            form.append('username', uname);
            form.append('password', pwd);
            resp = await fetch(url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: form.toString(),
                credentials: 'same-origin'
            });
        } else {
            resp = await fetch(url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ username: uname, password: pwd }),
                credentials: 'same-origin'
            });
        }

        const text = await resp.text();
        out.textContent = 'HTTP ' + resp.status + ' ' + resp.statusText + '\n\n' + text;
    } catch (err) {
        out.textContent = 'Fetch error: ' + err;
    }
}

document.getElementById('sendBtn').addEventListener('click', send);
</script>
</body>