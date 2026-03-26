<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard | Biometric System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-shield-check"></i> BioAuth Portal</a>
        <div class="d-flex">
            <span class="navbar-text text-white me-3">Welcome, John Doe</span>
            <a href="../logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                    </div>
                    <h5 class="card-title">John Doe</h5> <p class="text-muted small">ID: 2024-0001</p>
                    <span class="badge bg-success">Active Account</span> </div>
            </div>
            
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white"><strong>Notifications</strong></div> <div class="list-group list-group-flush">
                    <div class="list-group-item small">Teacher added a new Quiz in HCI.</div> <div class="list-group-item small">System maintenance at 10 PM.</div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Class Schedule</h5> <i class="bi bi-calendar3"></i>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Subject</th>
                                <th>Time</th>
                                <th>Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Human Computer Interaction</td>
                                <td>09:00 AM</td>
                                <td>Lab 3</td>
                            </tr>
                            <tr>
                                <td>Web Development</td>
                                <td>01:30 PM</td>
                                <td>Room 402</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm bg-primary text-white mb-3">
                        <div class="card-body">
                            <h6>Secured Resources</h6> <p class="small">Access your encrypted files and study materials.</p>
                            <button class="btn btn-sm btn-light">View Files</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>