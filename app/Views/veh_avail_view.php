<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Availability Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Vehicle Availability Data</h1>
        <a href="<?= base_url('veh-avail/upload') ?>" class="mb-4 inline-block bg-indigo-600 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-700">Upload XML File</a>

        <?php if (!empty($data) && is_array($data)) : ?>
            <?php foreach ($data as $item) : ?>
                <div class="bg-gray-50 p-4 rounded-lg mb-4 shadow-sm">
                    <h2 class="text-lg font-semibold">Record ID: <?= esc($item['id']) ?></h2>
                    <div class="mt-2">
                        <pre class="bg-gray-200 p-4 rounded-lg overflow-auto"><code class="json"><?= esc($item['json_data']) ?></code></pre>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-red-500">No data available.</p>
        <?php endif; ?>
        
        <div class="mt-4 flex justify-between">
            <div>
                <a href="javascript:history.go(-1)" class="text-indigo-600 hover:text-indigo-800">Back</a>
            </div>
            <div>
                <a href="<?= base_url() ?>" class="text-indigo-600 hover:text-indigo-800">Home</a>
            </div>
        </div>
    </div>

    <!-- Syntax highlighting for JSON -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("pre code").forEach(function(block) {
                hljs.highlightBlock(block);
            });
        });
    </script>
</body>
</html>
