<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Visites</title>
    <link rel="icon" href="../assets/images/icon/cropped-logo-creche-minibulle-1-32x32.png" sizes="32x32">

  <style>
    body {
  font-family: "Poppins", sans-serif;
  background: #fffaf3;
  color: #444;
  margin: 0;
  padding: 40px 20px;
}

.title {
  text-align: center;
  color: #c17c3a;
  font-family: "Fredoka One", sans-serif;
  margin-bottom: 30px;
}

.table-container {
  overflow-x: auto;
  max-width: 900px;
  margin: 0 auto;
}

.styled-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 16px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.styled-table thead {
  background-color: #a3a400;
  color: white;
}

.styled-table th, .styled-table td {
  padding: 12px 15px;
  text-align: left;
}

.styled-table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.styled-table tbody tr:hover {
  background-color: #f1f1c1;
  transition: background-color 0.3s ease;
}

@media (max-width: 600px) {
  .styled-table th, .styled-table td {
    font-size: 14px;
    padding: 10px;
  }
}

    </style>
</head>
<body>

  <h2 class="title">Liste des demandes de visite</h2>

  <div class="table-container">
    <table id="table" class="styled-table">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>E-mail</th>
          <th>Téléphone</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
  <script>
    fetch('contact_requests.json')
      .then(response => {
        if (!response.ok) throw new Error("HTTP error " + response.status);
        return response.json();
      })
      .then(data => {
        const body = document.querySelector('#table tbody');

        const requests = Array.isArray(data) ? data : [data];

        requests.sort((a, b) => new Date(b.date) - new Date(a.date));

        body.innerHTML = "";

        // Add sorted rows
        requests.forEach(item => {
          const row = document.createElement('tr');
          row.innerHTML = `
            <td>${item.last_name}</td>
            <td>${item.first_name}</td>
            <td>${item.email}</td>
            <td>${item.phone}</td>
            <td>${item.date}</td>
          `;
          body.appendChild(row);
        });
      })
      .catch(error => console.error("Erreur:", error));
  </script>
</body>
</html>
