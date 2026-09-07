<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Primgar International</title>
    <link rel="stylesheet" href="/Primgar International/index.css">
    <style>
        body { background: #0a0a0a; color: #fff; font-family: 'Plus Jakarta Sans', sans-serif; }
        .sidebar { width: 250px; background: #000; height: 100vh; position: fixed; border-right: 1px solid #222; padding: 20px; }
        .sidebar a { display: block; color: #aaa; text-decoration: none; padding: 15px; margin-bottom: 5px; border-radius: 5px; transition: 0.3s; }
        .sidebar a:hover, .sidebar a.active { background: #1a1a1a; color: #fff; border-left: 3px solid var(--red-accent); }
        .main-content { margin-left: 250px; padding: 40px; }
        h1 { margin-bottom: 20px; font-weight: 700; color: var(--red-accent); }
        .card { background: #111; padding: 20px; border-radius: 8px; border: 1px solid #222; margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #222; }
        th { color: #888; font-size: 0.85rem; text-transform: uppercase; }
        .btn { padding: 10px 20px; background: var(--red-accent); color: white; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; font-size: 0.9rem; }
        .btn:hover { background: var(--red-bright); }
        .btn-danger { background: #ff4d4d; }
        .form-control { width: 100%; padding: 12px; margin-bottom: 15px; background: #222; border: 1px solid #333; color: white; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="/Primgar International/images/primgar-logo.png" alt="Logo" style="height: 40px; margin-bottom: 40px; display: block;">
        <a href="#faqs" class="active">Manage FAQs</a>
        <a href="#testimonials">Manage Testimonials</a>
        <a href="/Primgar International/admin/logout" style="margin-top: auto; color: #ff4d4d;">Logout</a>
    </div>

    <div class="main-content">
        <h1>Dashboard Control Panel</h1>
        
        <div id="faqs" class="card">
            <h2>FAQs</h2>
            <table>
                <tr><th>ID</th><th>Question</th><th>Order</th><th>Action</th></tr>
                <?php foreach($faqs as $faq): ?>
                <tr>
                    <td><?= $faq['id'] ?></td>
                    <td><?= htmlspecialchars($faq['question']) ?></td>
                    <td><?= $faq['display_order'] ?></td>
                    <td><a href="/Primgar International/admin/delete-faq?id=<?= $faq['id'] ?>" class="btn btn-danger" onclick="return confirm('Delete?');">Delete</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
            
            <h4>Add New FAQ</h4>
            <form action="/Primgar International/admin/add-faq" method="POST">
                <input type="text" name="question" class="form-control" placeholder="Question" required>
                <textarea name="answer" class="form-control" placeholder="Answer" rows="3" required></textarea>
                <input type="number" name="display_order" class="form-control" placeholder="Display Order (e.g. 1)" value="0">
                <button type="submit" class="btn">Save FAQ</button>
            </form>
        </div>

        <div id="testimonials" class="card">
            <h2>Testimonials</h2>
            <table>
                <tr><th>ID</th><th>Author</th><th>Position</th><th>Action</th></tr>
                <?php foreach($testimonials as $test): ?>
                <tr>
                    <td><?= $test['id'] ?></td>
                    <td><?= htmlspecialchars($test['author']) ?></td>
                    <td><?= htmlspecialchars($test['position']) ?></td>
                    <td><a href="/Primgar International/admin/delete-testimonial?id=<?= $test['id'] ?>" class="btn btn-danger" onclick="return confirm('Delete?');">Delete</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
            
            <h4>Add New Testimonial</h4>
            <form action="/Primgar International/admin/add-testimonial" method="POST">
                <input type="text" name="author" class="form-control" placeholder="Author Name" required>
                <input type="text" name="position" class="form-control" placeholder="Position (e.g. CEO, Brand XYZ)" required>
                <input type="text" name="initials" class="form-control" placeholder="Initials (e.g. JM)">
                <textarea name="review" class="form-control" placeholder="Review Text" rows="3" required></textarea>
                <input type="number" name="display_order" class="form-control" placeholder="Display Order" value="0">
                <button type="submit" class="btn">Save Testimonial</button>
            </form>
        </div>
    </div>
</body>
</html>
