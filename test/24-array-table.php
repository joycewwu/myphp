<?php include __DIR__ . '/parts/config.php'; ?>
<?php

$title = '酒比的網頁';

$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => 'David',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ]
];

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">

    <table class="table">
        <thead>
            <tr class="table-warning">
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($persons as $p) : ?>
            <tr>
                <td><?= $p['name'] ?></td>
                <td><?= $p['gender'] ?></td>
                <td><?= $p['age'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>


<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php'; ?>