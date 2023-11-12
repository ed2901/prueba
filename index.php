<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gantt Chart</title>
  <script src="libs/dhtmlxgantt.js"></script>
  <link rel="stylesheet" href="libs/dhtmlxgantt.css">
</head>
<body>
  <div id="gantt_chart" style="width:100%; height:500px;"></div>

  <script>
    // Datos de ejemplo (puedes reemplazar esto con datos dinámicos desde tu base de datos)
    var tasks = [
      {id: 1, text: "Incepción", start_date: "2023-01-01", duration: 7},
      {id: 2, text: "Elaboración", start_date: "2023-01-08", duration: 14},
      {id: 3, text: "Construcción", start_date: "2023-01-22", duration: 21},
      {id: 4, text: "Transición", start_date: "2023-02-12", duration: 7}
    ];

    gantt.config.xml_date = "%Y-%m-%d";
    gantt.init("gantt_chart");
    gantt.parse({data: tasks});

  </script>
</body>
</html>

