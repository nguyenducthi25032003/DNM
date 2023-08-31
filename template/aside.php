<div class="py-8">
    <div class="bg-slate-200 py-4 px-5">
        <h1 class="font-bold">Danh mục</h1>
    </div>
    <?php
    include_once "models/m_home.php";
    $type = get_type();
    foreach ($type as $key => $value){
        ?>
        <div class="hover:bg-slate-100">
            <a href="index.php?url=prd_by_type&id_type=<?= $value['id']?>">
                <p class="border py-4 px-5"><?= $value['ten_loai'] ?></p>
            </a>
        </div>
    <?php }?>
</div>