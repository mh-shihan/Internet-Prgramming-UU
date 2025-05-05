<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <title>Final Lab Report</title>
</head>
<body>

<div class="hero h-1/2">
  <div class="hero-content w-full flex flex-col">
  <h1 class = "text-5xl font-medium  text-black">Student Info</h1>
    <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">

      <form action="index.php"  method="POST" class="card-body">
        <fieldset class="fieldset">
          <label class="label">Name</label>
          <input type="text" class="input" placeholder="Name" name="name" />
          <label class="label">Student ID</label>
          <input type="number" class="input" placeholder="Student ID" name="stu_id" />
          <label class="label">Batch</label>
          <input type="number" class="input" placeholder="Batch" name="batch" />
          <label class="label">Section</label>
          <input type="text" class="input" placeholder="Section" name="section" />
          <button class="btn btn-neutral mt-4">Submit</button>
        </fieldset>
    </form>
    
    </div>
  </div>
</div>

</body>
</html>