<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Welcome to Our Application</h1>
        <p class="text-gray-700">Please use the links below to access the various tasks.</p>
        <a href="<?= base_url('employee/register') ?>" class="mt-4 inline-block bg-indigo-600 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-700">Register Employee</a>
        <a href="<?= base_url('veh-avail/show') ?>" class="mt-4 inline-block bg-indigo-600 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-700">View VehAvail Data</a>
    </div>
</body>
</html>
