<?php include("./assets/components/head.php"); ?>
<main class="main pt-4" id="main">


    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-bread-title"><a href="#"><i
                                class="bi bi-home-alt fs-lg me-1"></i>Home</a></li>
                    <li class="breadcrumb-item  text-bread-title" aria-current="page">Documents</li>
                </ol>
            </nav>
            <style>
            .text-bread-title {
                font-weight: bold;
            }
            </style>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="container section-title" data-aos="fade-up">
                <h2>School Documents</h2>
                <p>Browse Available Documents</p>
            </div>
        </div>

        <div class="row g-4">
            <?php
            include('connect.php');

            $sql = "SELECT `id`, `title`, `discription`, `image` FROM `uploads` ORDER BY id DESC ";

            $query = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="view.php?get_id=<?php echo $row['id']?>" class="text-decoration-none">
                    <div class="card document-card border-0 shadow h-100 position-relative overflow-hidden" style="border-radius: 18px; background: #fff;">
                        <div class="card-header bg-white border-0 d-flex align-items-center position-relative document-header" style="border-bottom: 1px solid #e5e7eb; border-radius: 18px 18px 0 0;">
                            <span class="d-flex align-items-center justify-content-center me-3" style="width: 44px; height: 44px; background: linear-gradient(135deg, #e0e7ff 60%, #f0f7ff 100%); border-radius: 50%;">
                                <i class="bi bi-file-earmark-text fs-4 text-primary"></i>
                            </span>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 fw-semibold text-dark text-truncate" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></h6>
                                <small class="text-muted fw-normal">Document</small>
                            </div>
                        </div>
                        <div class="card-body position-relative p-4">
                            <p class="card-text text-secondary mb-4" style="min-height: 48px;"> <?php echo substr($row['discription'], 0, 100); ?>...</p>
                            <button class="btn btn-outline-primary w-100">
                                <i class="bi bi-eye me-2"></i>View Document
                            </button>
                        </div>
                    </div>
                    <style>
                        .document-card {
                            border-radius: 18px;
                            background: #fff;
                            box-shadow: 0 4px 24px 0 rgba(30, 64, 175, 0.07), 0 1.5px 8px 0 rgba(0,0,0,0.04);
                            transition: box-shadow 0.25s, transform 0.25s;
                        }
                        .document-card:hover {
                            box-shadow: 0 8px 32px 0 rgba(30, 64, 175, 0.13), 0 2px 12px 0 rgba(0,0,0,0.08);
                            transform: translateY(-3px) scale(1.012);
                        }
                        .document-header {
                            background: #fff;
                            border-bottom: 1px solid #e5e7eb;
                            border-radius: 18px 18px 0 0;
                            padding: 1.25rem 1.5rem 1rem 1.5rem;
                        }
                        .document-card .card-body {
                            background: #fff;
                            border-bottom-left-radius: 18px;
                            border-bottom-right-radius: 18px;
                            position: relative;
                            z-index: 1;
                            padding: 2rem 1.5rem 1.5rem 1.5rem;
                        }
                        .document-card .card-title, .document-card .card-header h6 {
                            font-size: 1.15rem;
                            font-weight: 600;
                            color: #1e293b;
                            letter-spacing: 0.01em;
                        }
                        .document-card .card-text {
                            color: #64748b;
                            font-size: 1rem;
                            font-weight: 400;
                        }
                        .document-card .bi-file-earmark-text {
                            color: #2563eb;
                            opacity: 0.85;
                        }
                    </style>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <style>
    .posts {
        gap: 20px;
    }

    .link{
        background: linear-gradient(to right, aliceblue, #fff, aliceblue);
        font-weight: bold;
        padding: 20px;

    }
    </style>






</main> <?php include("./assets/components/foot.php"); ?>