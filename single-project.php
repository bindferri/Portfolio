<?php require_once "include/header-secondary.php";


if (isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
}else{
    redirect("index.php");
}

$project = new Project();
$projectItem = $project->fetchSingle($id);

?>

<section class="single-content">
    <img class="single-content__img--primary" src="admin/assets/project_img/<?php echo $projectItem->project_main_photo ?>" alt="">
    <h1>Omni Food Project</h1>
    <p class="single-content__text"><?php echo $projectItem->project_content ?></p>

    <img class="single-content__img" src="admin/assets/project_img/<?php echo $projectItem->project_second_photo ?>" alt="">
    <img class="single-content__img" src="admin/assets/project_img/<?php echo $projectItem->project_third_photo ?>" alt="">
</section>

<?php require_once "include/footer.php"?>