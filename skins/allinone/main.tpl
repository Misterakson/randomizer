<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Рандомизатор</h1>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

        <form method="post" action="">
            
            <h2>Вставьте текст</h2>
            <p><textarea name="text" class="form-control" rows="6"></textarea></p>
            <p><small><input type="checkbox" name="out_rand"> Перемешка контента по абзацам</small></p>
            <p><small><input type="checkbox" name="sym_del"> Удаление случайных символов <input type="text" name="s_d_pro" size="1" > %</small></p>
            <p><small><input type="checkbox" name="sp_del"> Удаление случайных пробелов <input type="text" name="sp_d_pro" size="1" > %</small></p>
            <p><small><input type="checkbox" name="sym_add"> Добавление случайных символов <input type="text" name="s_a_pro" size="1" > %</small></p>
            <p><small><input type="checkbox" name="sym_mist"> Допущение ошибок (тся|ться)(ере|ире|ери) <input type="text" name="s_m_pro" size="1" > %</small></p>
            <p><small><input type="checkbox" name="sym_rep"> Замена английскими символами <input type="text" name="s_r_pro" size="1" > %</small></p>
            <p><small><input type="checkbox" name="scr_inp"> Вставка Javascript'a <input type="text" name="js_i_pro" size="1" > %</small></p>
            <p><small><input type="checkbox" name="html_inp"> Вставка HTML тегов <input type="text" name="html_t_pro" size="1" > %</small></p>
            <p><small><input type="checkbox" name="no_inp"> Вставка no-index тегов <input type="text" name="no_pro"> %</small></p>
            <p><small><input type="checkbox" name="img_inp"> Вставка картинок | Название папки <input type="text" name="folder_name"> <input type="text" size="1" name="img_pro">%</small></p>
            <p><small><input type="checkbox" name="add_hr"> Вставка горизонтальной линии между абзацами</small></p>
  
            

            <p><input type="submit" value="Send" name="sent" class="btn btn-danger">

        </form>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-10">

                <?php
                if(isset($result)){?>
                <h2>Ваш текст</h2>
                <hr>
                <?php
                    echo @$result;
                }
                else{?>
                
                
                    <h3>Ваш текст будет тут</h3>
                
                
                <?php
                }
                

                ?>

        </div>
    <div class="col-md-1"></div>
</div>