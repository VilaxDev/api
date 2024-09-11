<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Travel Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #4a90e2, #67b26f);
            --secondary-gradient: linear-gradient(135deg, #50c878, #4a90e2);
            --background-color: #f8f9fa;
            --text-color: #333;
            --card-bg: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: var(--primary-gradient);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .table-container {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-top: 2rem;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead {
            background: var(--primary-gradient);
            color: white;
        }

        .table thead th {
            border: none;
            padding: 1rem;
            font-weight: 600;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: rgba(74, 144, 226, 0.1);
        }

        .table tbody td {
            border: none;
            padding: 1rem;
            vertical-align: middle;
        }

        .badge {
            padding: 0.5em 0.75em;
            border-radius: 20px;
            font-weight: 500;
        }

        .badge-rating {
            background: var(--secondary-gradient);
            color: white;
        }

        .badge-category {
            background-color: #e9ecef;
            color: #495057;
        }

        .btn-action {
            padding: 0.25rem 0.5rem;
            border-radius: 50%;
            transition: all 0.3s ease;
            margin: 0 0.2rem;
        }

        .btn-action:hover {
            transform: scale(1.1);
        }

        .location-icon {
            color: #4a90e2;
            margin-right: 0.5rem;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .02);
        }

        .add-destination-btn {
            background: var(--secondary-gradient);
            border: none;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .add-destination-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-globe-americas me-2"></i>Modern Travel Table
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h1 class="fw-bold">Travel Destinations</h1>
            <button class="btn add-destination-btn btn-lg text-white">
                <i class="fas fa-plus-circle me-2"></i>Add Destination
            </button>
        </div>

        <div class="table-container">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Rating</th>
                        <th>Visitors</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">Tropical Paradise</td>
                        <td>Beautiful beaches and crystal-clear waters</td>
                        <td><i class="fas fa-map-marker-alt location-icon"></i>Maldives</td>
                        <td><span class="badge badge-rating">4.8</span></td>
                        <td>1,245</td>
                        <td><span class="badge badge-category">Beach</span></td>
                        <td>
                            <button class="btn btn-warning btn-action"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-action"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Mountain Retreat</td>
                        <td>Scenic views and hiking trails</td>
                        <td><i class="fas fa-map-marker-alt location-icon"></i>Swiss Alps</td>
                        <td><span class="badge badge-rating">4.6</span></td>
                        <td>987</td>
                        <td><span class="badge badge-category">Mountain</span></td>
                        <td>
                            <button class="btn btn-warning btn-action"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-action"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Cultural Experience</td>
                        <td>Rich history and local traditions</td>
                        <td><i class="fas fa-map-marker-alt location-icon"></i>Kyoto, Japan</td>
                        <td><span class="badge badge-rating">4.7</span></td>
                        <td>1,163</td>
                        <td><span class="badge badge-category">Culture</span></td>
                        <td>
                            <button class="btn btn-warning btn-action"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-action"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Urban Adventure</td>
                        <td>Vibrant city life and modern attractions</td>
                        <td><i class="fas fa-map-marker-alt location-icon"></i>New York City, USA</td>
                        <td><span class="badge badge-rating">4.5</span></td>
                        <td>2,789</td>
                        <td><span class="badge badge-category">City</span></td>
                        <td>
                            <button class="btn btn-warning btn-action"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-action"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Historical Wonders</td>
                        <td>Ancient ruins and archaeological sites</td>
                        <td><i class="fas fa-map-marker-alt location-icon"></i>Rome, Italy</td>
                        <td><span class="badge badge-rating">4.9</span></td>
                        <td>3,421</td>
                        <td><span class="badge badge-category">History</span></td>
                        <td>
                            <button class="btn btn-warning btn-action"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-action"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
