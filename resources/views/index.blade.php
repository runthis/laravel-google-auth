<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">

    <title>Login</title>

    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        .login-hero {
            background: linear-gradient(0deg,#020024 10%,#090979 35%,#00d4ff);
            color: #fff;
            height: 100vh;
        }

        .login-hero:before {
            content: " ";
            position: absolute;
            background-image: url('data:image/svg+xml;base64,CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWw6c3BhY2U9InByZXNlcnZlIiBpZD0iX3gzMF8xIiB4PSIwIiB5PSIwIiB2aWV3Qm94PSIwIDAgMTQ0MCA4MDAiPjxzdHlsZT4uc3Qze2ZpbGw6IzBhNTRjOX0uc3Q1e2ZpbGw6IzJjZDRkOX0uc3Q2e2ZpbGw6IzJmOGRkM30uc3Q3e2ZpbGw6bm9uZTtzdHJva2U6I2MyZDNlYjtzdHJva2Utd2lkdGg6Ljg5OTk7c3Ryb2tlLW1pdGVybGltaXQ6MTB9PC9zdHlsZT48cGF0aCBmaWxsPSIjMTIwNjY3IiBkPSJNMTQ0MCA4MDBIMFYwaDE0NDB6Ii8+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgeDE9IjcyMCIgeDI9IjcyMCIgeTE9IjAiIHkyPSI4MDAuNCIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAwIDgwMCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiMxMjA2NjciLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiMwYzAyMmYiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGZpbGw9InVybCgjU1ZHSURfMV8pIiBkPSJNNzE0IDAgMCAzMjF2NDc5aDE0NDBWMHoiLz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzJfIiB4MT0iNDUuMSIgeDI9IjE5Ni4xIiB5MT0iODI2IiB5Mj0iNTY0LjQiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgLTEgMCA4MDApIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMGE1NGM5Ii8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMGE1NGM5Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBmaWxsPSJ1cmwoI1NWR0lEXzJfKSIgZD0ibTMwNSAwLTgzIDIyMUwwIDMyMVYweiIvPjxwYXRoIGQ9Ik0zNjQgMjI2aDIydjIyaC0yMnoiIGNsYXNzPSJzdDMiIHRyYW5zZm9ybT0icm90YXRlKC02OSAzNzQgMjM3KSIvPjxwYXRoIGQ9Ik0zNzYgMjU0aDIydjIyaC0yMnoiIGNsYXNzPSJzdDMiIHRyYW5zZm9ybT0icm90YXRlKC02OSAzODcgMjY1KSIvPjxwYXRoIGQ9Im0yNTAgMjA4IDgtMjAtMjYtMTAtMTUgNDEgMjUgMTAgMjEgNyA3LTIweiIgY2xhc3M9InN0MyIvPjxwYXRoIGQ9Ik0yODYgMjI3aDIydjIyaC0yMnoiIGNsYXNzPSJzdDMiIHRyYW5zZm9ybT0icm90YXRlKC02OSAyOTcgMjM4KSIvPjxwYXRoIGQ9Ik0zNDMgNzdoMjJ2MjJoLTIyeiIgY2xhc3M9InN0MyIgdHJhbnNmb3JtPSJyb3RhdGUoLTY5IDM1NCA4OCkiLz48cGF0aCBkPSJNMzk5IDUyaDIydjIyaC0yMnoiIGNsYXNzPSJzdDMiIHRyYW5zZm9ybT0icm90YXRlKC02OSA0MTAgNjMpIi8+PHBhdGggZD0iTTQ0MCAxNSAzOTkgMGgtNDdsLTIgNSAyMCA4LTcgMjAgNDEgMTYgNy0yMSAyMSA4eiIgY2xhc3M9InN0MyIvPjxwYXRoIGQ9Ik00NjEgNzVoMjJ2MjJoLTIyeiIgY2xhc3M9InN0MyIgdHJhbnNmb3JtPSJyb3RhdGUoLTY5IDQ3MiA4NikiLz48cGF0aCBkPSJtNDYwIDIzLTIwLTggNS0xNWgxNmw3IDN6IiBjbGFzcz0ic3QzIi8+PHBhdGggZD0iTTQxMiA4MGgyMnYyMmgtMjJ6IiBjbGFzcz0ic3QzIiB0cmFuc2Zvcm09InJvdGF0ZSgtNjkgNDIzIDkxKSIvPjxwYXRoIGQ9Ik0zNjIgMTUzaDIydjIyaC0yMnoiIGNsYXNzPSJzdDMiIHRyYW5zZm9ybT0icm90YXRlKC02OSAzNzMgMTY0KSIvPjxwYXRoIGQ9Ik00NDQgMTg0aDIydjIyaC0yMnoiIGNsYXNzPSJzdDMiIHRyYW5zZm9ybT0icm90YXRlKC02OSA0NTUgMTk1KSIvPjxwYXRoIGQ9Im0yNzYgNzEgMjMgOC04IDIxLTIyLTl6IiBjbGFzcz0ic3QzIi8+PHBhdGggZD0iTTI4NiAxMDNoMjJ2MjJoLTIyeiIgY2xhc3M9InN0MyIgdHJhbnNmb3JtPSJyb3RhdGUoLTY5IDI5NyAxMTQpIi8+PHBhdGggZD0ibTM0MiAyNi0yMC04IDYtMThoLTI0bC0xOSA1MSAyMSA4IDgtMjEgMjEgOHoiIGNsYXNzPSJzdDMiLz48cGF0aCBkPSJNMzEyIDE2MGgyMnYyMmgtMjJ6IiBjbGFzcz0ic3QzIiB0cmFuc2Zvcm09InJvdGF0ZSgtNjkgMzIyIDE3MSkiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMwYTU0YzkiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIuOSIgZD0ibTkzNiA4MDAgMzYwLTE2NCA4OS0yMzUtODktMjM1LTI1Mi0xMTRtMCAwTDAgNTMzIiBvcGFjaXR5PSIuMyIvPjxwYXRoIGQ9Ik0xMTI2IDY4OWgzNHYzNGgtMzR6IiBjbGFzcz0ic3Q1IiB0cmFuc2Zvcm09InJvdGF0ZSgtNjkgMTE0MyA3MDYpIi8+PHBhdGggZD0iTTEyMDkgNzU2aDM0djM0aC0zNHoiIGNsYXNzPSJzdDUiIHRyYW5zZm9ybT0icm90YXRlKC02OSAxMjI2IDc3MykiLz48cGF0aCBkPSJNMTE4OSA3MTJoMzR2MzRoLTM0eiIgY2xhc3M9InN0NSIgdHJhbnNmb3JtPSJyb3RhdGUoLTY5IDEyMDYgNzI5KSIvPjxwYXRoIGQ9Ik0xMjMzIDY5M2gzNHYzNGgtMzR6IiBjbGFzcz0ic3Q1IiB0cmFuc2Zvcm09InJvdGF0ZSgtNjkgMTI1MCA3MDkpIi8+PHBhdGggZD0iTTEyOTYgNzE2aDM0djM0aC0zNHoiIGNsYXNzPSJzdDUiIHRyYW5zZm9ybT0icm90YXRlKC02OSAxMzEzIDczMykiLz48cGF0aCBkPSJNMTQwMCA3MjBoMzR2MzRoLTM0eiIgY2xhc3M9InN0NSIgdHJhbnNmb3JtPSJyb3RhdGUoLTY5IDE0MTcgNzM3KSIvPjxwYXRoIGQ9Ik0xMzE1IDc2MGgzNHYzNGgtMzR6IiBjbGFzcz0ic3Q1IiB0cmFuc2Zvcm09InJvdGF0ZSgtNjkgMTMzMiA3NzYpIi8+PHBhdGggZD0iTTEzMDAgNjEwaDM0djM0aC0zNHoiIGNsYXNzPSJzdDUiIHRyYW5zZm9ybT0icm90YXRlKC02OSAxMzE3IDYyNykiLz48cGF0aCBkPSJNMTMxOSA2NTNoMzR2MzRoLTM0eiIgY2xhc3M9InN0NSIgdHJhbnNmb3JtPSJyb3RhdGUoLTY5IDEzMzYgNjcwKSIvPjxwYXRoIGQ9Ik0xMzg2IDU3MWgzNHYzNGgtMzR6IiBjbGFzcz0ic3Q1IiB0cmFuc2Zvcm09InJvdGF0ZSgtNjkgMTQwMyA1ODcpIi8+PHBhdGggZD0iTTEzMjQgNTQ3aDM0djM0aC0zNHoiIGNsYXNzPSJzdDUiIHRyYW5zZm9ybT0icm90YXRlKC02OSAxMzQwIDU2NCkiLz48cGF0aCBkPSJtMTQ0MCA1NDctMy0xLTEyIDMyIDE1IDV6IiBjbGFzcz0ic3Q1Ii8+PHBhdGggZD0iTTEzOTAgNDY0aDM0djM0aC0zNHoiIGNsYXNzPSJzdDUiIHRyYW5zZm9ybT0icm90YXRlKC02OSAxNDA3IDQ4MSkiLz48cGF0aCBkPSJtMTE2MiA4MDAgMTEtMjktMzItMTItMTIgMzEgMjcgMTB6IiBjbGFzcz0ic3Q1Ii8+PHBhdGggZD0iTTEwMTIgMzAxaDIydjIyaC0yMnoiIGNsYXNzPSJzdDYiLz48cGF0aCBkPSJNOTkwIDMyM2gyMnYyMmgtMjJ6IiBjbGFzcz0ic3QzIi8+PHBhdGggZD0iTTEwMzQgMzQ1aDIydjIyaC0yMnptLTg4LTIyaDIydjIyaC0yMnoiIGNsYXNzPSJzdDYiLz48cGF0aCBkPSJNOTkwIDI3OGgyMnYyMmgtMjJ6bTY2LTIyaDIydjIyaC0yMnpNOTAyIDM4OWgtMjJhMTcyIDE3MiAwIDAgMCAwIDIyaDIydi0yMnptMjItMTAwYy0yMCAyMS0zNCA0OC00MSA3OGgxOXYyMmgyMnYtMjJoLTIydi0yMmgyMnYtMjNoMjJ2LTIyaC0yMnYtMTF6bTQ0LTM0djIzaDIydi0yMmgyMnYyMmgyMnYtNDFjLTI0IDEtNDYgOC02NiAxOHptMTEwLTE1djE2aDIydi0xMGwtMjItNnoiIGNsYXNzPSJzdDMiLz48Y2lyY2xlIGN4PSIxMDQ0LjQiIGN5PSI0MDEuMiIgcj0iMjEzLjciIGNsYXNzPSJzdDciLz48cGF0aCBkPSJNMTA0NCA1NjVhMTY0IDE2NCAwIDAgMCAxNTQtMjIxTDg5MiA0NjJjMjQgNjAgODMgMTAzIDE1MiAxMDN6IiBjbGFzcz0ic3QzIi8+PHBhdGggZD0iTTEwMTMgNjkyaDIxdjIxaC0yMXoiIGNsYXNzPSJzdDMiIHRyYW5zZm9ybT0icm90YXRlKC0yNCAxMDIzIDcwMikiLz48cGF0aCBkPSJNODUwIDcxNmgzN3YzN2gtMzd6IiBjbGFzcz0ic3QzIiB0cmFuc2Zvcm09InJvdGF0ZSgtMjUgODY5IDczNCkiLz48bGluZWFyR3JhZGllbnQgaWQ9IlNWR0lEXzNfIiB4MT0iODgwLjgiIHgyPSIxMjA5IiB5MT0iNjgyLjIiIHkyPSIxMTMuOSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAtMSAwIDgwMCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBvZmZzZXQ9Ii4xIiBzdG9wLWNvbG9yPSIjMmY4ZGQzIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMmNkNGQ5Ii8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBmaWxsPSJ1cmwoI1NWR0lEXzNfKSIgZD0iTTEyOTYgMTY2IDEwNDQgNTJsLTg0IDM5IDEzIDI4LTI4IDEyLTEzLTI4LTI4IDEzIDEyIDI4IDEzIDI4IDI4LTEyIDEzIDI4LTI4IDEyLTEzLTI4LTI4IDEzLTEzLTI4LTI4IDEzLTEyLTI4LTI5IDEyIDEzIDI4LTI4IDEzLTEyLTI2LTE1IDQxIDEyIDI2IDI4LTEzIDEzIDI4LTI5IDEzIDEzIDI4LTI4IDEzLTEzLTI4LTEyLTI3LTU3IDE1MSA4OSAyMzUgMjUxIDExNCAyNTItMTE0IDg5LTIzNS04OS0yMzV6TTc3MSAzNDZsLTEzLTI4IDI4LTEzIDEzIDI4LTI4IDEzem0yMzAtMjQwIDEzIDI4LTI4IDEyLTEzLTI4IDI4LTEyem00MyA0NTlhMTY0IDE2NCAwIDEgMSAwLTMyOCAxNjQgMTY0IDAgMCAxIDAgMzI4eiIvPjxjaXJjbGUgY3g9IjEwNDQuNCIgY3k9IjQwMS4yIiByPSIyMTMuNyIgY2xhc3M9InN0NyIvPjxwYXRoIGQ9Ik0xMTc0IDU1M2gyMXYyMWgtMjF6bTIxLTIwaDIxdjIxaC0yMXpNODAwIDQxMWgyMXYyMWgtMjF6bTIxLTIxaDIxdjIxaC0yMXoiIGNsYXNzPSJzdDMiLz48cGF0aCBkPSJNNzM3IDUxNWgzMXYzMWgtMzF6IiBjbGFzcz0ic3QzIiB0cmFuc2Zvcm09InJvdGF0ZSgtMjEgNzUyIDUzMSkiLz48cGF0aCBkPSJNMTAyOSAxMzNoMzF2MzFoLTMxeiIgY2xhc3M9InN0MyIgdHJhbnNmb3JtPSJyb3RhdGUoLTIxIDEwNDQgMTQ4KSIvPjxwYXRoIGQ9Ik0xMDQzIDY1NmgyMXYyMWgtMjF6IiBjbGFzcz0ic3QzIiB0cmFuc2Zvcm09InJvdGF0ZSgtMjQgMTA1MyA2NjcpIi8+PC9zdmc+');
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
            opacity: .25;
        }

        .login-box-container {
            color: #fff;
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
    </style>

</head>
<body>
    <main class="login-hero">
        <div class="login-box-container">
            <div id="g_id_onload"
                data-client_id="{{ config('login.google.client_id') }}"
                data-context="signin"
                data-ux_mode="popup"
                data-login_uri="{{ config('login.google.redirect') }}"
                data-auto_prompt="true"
                data-_token="{{ csrf_token() }}"
                data-_state="{{ $state }}"
                data-auto_select="true"
            />

            <div class="g_id_signin"
                data-type="standard"
                data-shape="pill"
                data-theme="filled_blue"
                data-text="signin_with"
                data-size="large"
                data-logo_alignment="left"
            />
        </div>
    </main>

    <script src="https://accounts.google.com/gsi/client"></script>

</body>
</html>
