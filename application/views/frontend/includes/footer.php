<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <!-- ลิงก์ไปยัง Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* ให้ body และ html เต็มความสูงของหน้าจอ */
        html, body {
            height: 25%;
            display: flex;
            flex-direction: column;
        }
        
        /* main จะขยายเต็มที่ โดยดัน footer ลงล่าง */
        
        .footer-custom {
            background-color: #343a40;
            color: #ffffff;
            padding: 40px 0;
        }
        .footer-custom a {
            color: #d1d1d1;
            text-decoration: none;
        }
        .footer-custom a:hover {
            color: #ffffff;
        }
        .footer-custom .social-icons a {
            font-size: 24px;
            margin-right: 15px;
            color: #d1d1d1;
        }
        .footer-custom .social-icons a:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>


<!-- Footer -->
<footer class="footer-custom">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4">
                <h5>เกี่ยวกับเรา</h5>
                <p>บริษัทของเราให้บริการผลิตภัณฑ์ที่ยอดเยี่ยม พร้อมการสนับสนุนและบริการที่ครอบคลุม มุ่งเน้นคุณภาพและนวัตกรรมอย่างต่อเนื่องเพื่อสร้างสรรค์สิ่งใหม่ ๆ ให้กับลูกค้าของเรา</p>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-2">
                <h5>ลิงก์ด่วน</h5>
                <ul class="list-unstyled">
                    <li><a href="#">หน้าหลัก</a></li>
                    <li><a href="#">เกี่ยวกับเรา</a></li>
                    <li><a href="#">บริการ</a></li>
                    <li><a href="#">ติดต่อเรา</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="col-md-3">
                <h5>ติดต่อเรา</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> 1234 ถนนแห่งความหวัง, กรุงเทพฯ</li>
                    <li><i class="fas fa-phone-alt"></i> +66 123 456 789</li>
                    <li><i class="fas fa-envelope"></i> info@yourcompany.com</li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div class="col-md-3 text-md-right social-icons">
                <h5>ติดตามเรา</h5>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <hr class="my-4">
        <div class="text-center">
            <p class="mb-0">&copy; 2024 YourCompany. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- ลิงก์ไปยัง Font Awesome และ Bootstrap JS -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
