<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio - SIGI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
    }
    .dashboard-header {
      margin-top: 30px;
      margin-bottom: 20px;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      transition: transform 0.2s ease-in-out;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-icon {
      font-size: 2rem;
    }
  </style>
</head>
<body>

<div class="container py-4">
  <h2 class="text-center dashboard-header">Resumen General del Sistema</h2>
  <div class="row g-4">

    <div class="col-md-4">
      <div class="card text-white bg-primary h-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Académico</h5>
              <p class="card-text">Estudiantes: 320<br>Docentes: 45</p>
            </div>
            <div class="card-icon">
              📘
            </div>
          </div>
        </div>
        <div class="card-footer text-end">
          <a href="#" class="text-white text-decoration-none">Ver más →</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card text-white bg-success h-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Biblioteca</h5>
              <p class="card-text">Libros: 850<br>Préstamos: 120</p>
            </div>
            <div class="card-icon">
              📚
            </div>
          </div>
        </div>
        <div class="card-footer text-end">
          <a href="#" class="text-white text-decoration-none">Ver más →</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card text-white bg-warning h-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Admisión</h5>
              <p class="card-text">Postulantes: 200<br>Admitidos: 95</p>
            </div>
            <div class="card-icon">
              📝
            </div>
          </div>
        </div>
        <div class="card-footer text-end">
          <a href="#" class="text-white text-decoration-none">Ver más →</a>
        </div>
      </div>
    </div>

    <!-- Puedes agregar más tarjetas según módulos -->

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
