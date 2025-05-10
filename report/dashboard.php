<?php
    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("Location: login.php");
        exit;
    }

    include('../savethedate/exec/db.php');

    // ดึงข้อมูลจาก guest
    $sql_guest = "SELECT `name`, `group`, `relation`, `follower`, `u_date` FROM guest ORDER BY u_date DESC";
    $result_guest = $conn->query($sql_guest);

    // ดึงข้อมูลจาก message
    $sql_message = "SELECT `name`, `group`, `relation`, `message`, `img`, `u_date`, `status` FROM message ORDER BY u_date DESC";
    $result_message = $conn->query($sql_message);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-4 text-center">สรุปการตอบรับคำเชิญ</h4>

            <!-- Tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="coming-tab" data-bs-toggle="tab" data-bs-target="#coming" type="button" role="tab">จะมางาน</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="notcoming-tab" data-bs-toggle="tab" data-bs-target="#notcoming" type="button" role="tab">ไม่สะดวกมา</button>
                </li>
            </ul>

            <div class="tab-content mt-3" id="myTabContent">
                <!-- Tab: จะมางาน -->
                <div class="tab-pane fade show active" id="coming" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm align-middle text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>กลุ่ม</th>
                                    <th>ความเกี่ยวข้อง</th>
                                    <th>จำนวนคน</th>
                                    <th>วันที่ตอบกลับ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($result_guest->num_rows > 0): ?>
                                    <?php while ($row = $result_guest->fetch_assoc()): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['name']) ?></td>
                                            <td><?= htmlspecialchars($row['group']) ?></td>
                                            <td><?= htmlspecialchars($row['relation']) ?></td>
                                            <td><?= (int)$row['follower'] ?></td>
                                            <td><?= htmlspecialchars($row['u_date']) ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr><td colspan="5">ไม่มีข้อมูล</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tab: ไม่สะดวกมา -->
                <div class="tab-pane fade" id="notcoming" role="tabpanel">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm align-middle text-center">
                            <thead class="table-light">
                                <tr>
                                    <th>ชื่อ</th>
                                    <th>กลุ่ม</th>
                                    <th>ความเกี่ยวข้อง</th>
                                    <th>ข้อความ</th>
                                    <th>รูปภาพ</th>
                                    <th>วันที่ตอบกลับ</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($result_message->num_rows > 0): ?>
                                    <?php while ($row = $result_message->fetch_assoc()): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($row['name']) ?></td>
                                            <td><?= htmlspecialchars($row['group']) ?></td>
                                            <td><?= htmlspecialchars($row['relation']) ?></td>
                                            <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
                                            <td>
                                                <?php if (!empty($row['img'])): ?>
                                                    <img src="<?= htmlspecialchars($row['img']) ?>" alt="img" style="max-height: 60px;">
                                                <?php else: ?>
                                                    -
                                                <?php endif; ?>
                                            </td>
                                            <td><?= htmlspecialchars($row['u_date']) ?></td>
                                            <td><?= htmlspecialchars($row['status']) ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr><td colspan="7">ไม่มีข้อมูล</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="logout.php" class="btn btn-outline-danger">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
$conn->close();
?>