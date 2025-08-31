<?php require("views/components/head.php") ?>
<?php require("views/components/nav.php") ?>

<?php require("views/components/banner.php") ?>

<!-- Page content -->
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mt-4 text-lg">Aquí puedes ver tus notas.</p>

        <table class="border-collapse border border-gray-400 mt-4 w-100">
            <tbody>
                <?php foreach ($notes as $note): ?>
                    <tr>
                        <td class="border border-gray-300 p-2">
                            <a href="note?id=<?= $note['id'] ?>" class="text-blue-600 hover:underline"><?= $note['body'] ?></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php require("views/components/footer.php") ?>