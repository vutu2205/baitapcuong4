<!DOCTYPE html>
<html>
<head>
    <title>QLSV</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f1f5f9; }

        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: linear-gradient(180deg,#4f46e5,#2563eb);
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            margin: 5px;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        .content {
            margin-left: 250px;
            padding: 25px;
        }

        .card-pro {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        label {
            font-weight: 600;
        }

        small {
            color: gray;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h4 class="text-center">📚 QLSV</h4>
    <a href="/dashboard">🏠 Dashboard</a>
    <a href="/classes">📖 Lớp học</a>
    <a href="/students">👥 Sinh viên</a>
    <a href="/classes/create">➕ Thêm lớp</a>
    <a href="/logout">🚪 Logout</a>
</div>

<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html><?php /**PATH D:\baitapgiuaki\baitapgiuaki\qlsv\resources\views/layout/app.blade.php ENDPATH**/ ?>