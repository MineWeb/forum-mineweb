<?= $this->Html->css('Forum.forum-style.css?'.rand(1, 1000000)) ?>
<?= $this->Html->css('Forum.custom.css') ?>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li <?php if($router == 'home') echo 'class="active"'; ?>><a href="./home"><?= $Lang->get('FORUM__GENERAL__O'); ?></a></li>
                    <li <?php if($router == 'forum') echo 'class="active"'; ?>><a href="./forum"><?= $Lang->get('FORUM__TITLE'); ?></a></li>
                </ul>
                <div class="tab-content">
                    <?php if($router == 'home'): ?>
                        <div class="tab-pane active" id="tab_general">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="tab_general accordion" class="box box-info">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><?= $Lang->get('FORUM__BACKGROUND'); ?></h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12" id="dropdown">
                                                    <?= $this->Form->create(false, ['type' => 'post', 'data-ajax' => 'true']); ?>
                                                        <div class="radio">
                                                            <input type="radio" name="background" value="[background][none]" <?php if($configTheme['background']['type'] == 'default') echo "checked"; ?> />
                                                            <label><?= $Lang->get('FORUM__BASIC'); ?></label>
                                                        </div>

                                                        <div class="radio">
                                                            <input type="radio" name="background" id="background-color" <?php if($configTheme['background']['type'] == 'color') echo "checked"; ?> value="[background][color]" />
                                                            <label><?= $Lang->get('FORUM__COLOR'); ?></label>
                                                        </div>
                                                        <div id="type-dropdown" class="<?php if($configTheme['background']['type'] != 'color') echo 'hidden'; ?>">
                                                            <div class="form-group">
                                                                <label><?= $Lang->get('FORUM__COLOR'); ?></label>
                                                                <input type="text" class="form-control" name="background-color" value="<?php if($configTheme['background']['type'] == 'color') echo $configTheme['background']['value']; ?>" placeholder="#b2b2b2" />
                                                            </div>
                                                        </div>

                                                        <div class="radio">
                                                            <input type="radio" name="background" id="background-image"  <?php if($configTheme['background']['type'] == 'image') echo "checked"; ?> value="[background][image]" />
                                                            <label><?= $Lang->get('FORUM__PICTURE'); ?></label>
                                                        </div>
                                                        <div id="type-dropdown2" class="<?php if($configTheme['background']['type'] != 'image') echo 'hidden'; ?>">
                                                            <div class="form-group">
                                                                <label><?= $Lang->get('FORUM__URI'); ?></label>
                                                                <input type="text" class="form-control" name="background-image" value="<?php if($configTheme['background']['type'] == 'image') echo $configTheme['background']['value']; ?>" placeholder="https://images.unsplash.com/photo-1420768255295-e871cbf6eb81" />
                                                            </div>
                                                        </div>
                                                    <?= $this->Form->end(['label' => 'Modifier', 'class' => 'btn btn-success pull-right']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="tab_general accordion" class="box box-success">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Gestion des descriptions</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php echo $this->Form->create(false, ['type' => 'post', 'data-ajax' => 'true']); ?>
                                                        <div class="radio">
                                                            <input type="radio" name="description" value="description-base" <?php if($configTheme['description'] == 'description') echo "checked"; ?> />
                                                            <label>Normal (A droite du titre)</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input type="radio" name="description" value="description-tooltip" <?php if($configTheme['description'] == 'tooltip') echo "checked"; ?> />
                                                            <label>Toopltip (Nécessite un passage de la souris)</label>
                                                        </div>
                                                    <?php echo $this->Form->end(['label' => 'Modifier', 'class' => 'btn btn-success pull-right']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="tab_general accordion" class="box box-danger">
                                        <div class="box-header with-border">
                                            <h3 class="box-title"><?= $Lang->get('FORUM__MANAGE__ICONS'); ?></h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ol class="forum-breadcrumb forum-breadcrumb-menu">
                                                        <li class="forum-left">
                                                            <a href="" class="forum-breadcrumb-fahome"><i class="fa fa-home" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li class="forum-left"></li>
                                                        <li class="forum-left"></li>
                                                        <li class="forum-left"></li>
                                                        <li class="forum-left"></li>
                                                        <li class="forum-left">
                                                            <a href="" class="forum-breadcrumb-faflag"><i class="fa fa-flag" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li class="forum-left">
                                                            <a href="" class="forum-breadcrumb-faenvelope"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li class="forum-left">
                                                            <a href="" class="forum-breadcrumb-fauser"><i class="fa fa-user" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li class="forum-left">
                                                            <a href="" class="forum-breadcrumb-fasignout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                                        </li>
                                                        <li class="forum-left"></li>
                                                        <li class="forum-left"></li>
                                                        <li class="forum-left">
                                                            <a href="" class="forum-breadcrumb-fasignin"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                                        </li>
                                                    </ol>
                                                </div>
                                                <div class="col-md-12">
                                                    <?php echo $this->Form->create(false, ['type' => 'post', 'data-ajax' => 'true']); ?>
                                                        <input type="hidden" name="type" value="icon" />
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-home" aria-hidden="true"></i>
                                                                </div>
                                                                <input value="<?php if(!empty($configTheme['icons']['home'])) echo $configTheme['icons']['home']; ?>" name="icon-home" placeholder="#A57A57 (couleur hexadécimal)" class="form-control" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                                                </div>
                                                                <input value="<?php if(!empty($configTheme['icons']['flag'])) echo $configTheme['icons']['flag']; ?>" name="icon-flag" placeholder="#A57A57 (couleur hexadécimal)" class="form-control" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                                </div>
                                                                <input value="<?php if(!empty($configTheme['icons']['envelope'])) echo $configTheme['icons']['envelope']; ?>" name="icon-envelope" placeholder="#A57A57 (couleur hexadécimal)" class="form-control" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                </div>
                                                                <input value="<?php if(!empty($configTheme['icons']['user'])) echo $configTheme['icons']['user']; ?>" name="icon-user" placeholder="#A57A57 (couleur hexadécimal)" class="form-control" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                                                </div>
                                                                <input value="<?php if(!empty($configTheme['icons']['out'])) echo $configTheme['icons']['out']; ?>" name="icon-out" placeholder="#A57A57 (couleur hexadécimal)" class="form-control" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                </div>
                                                                <input value="<?php if(!empty($configTheme['icons']['in'])) echo $configTheme['icons']['in']; ?>" name="icon-in" placeholder="#A57A57 (couleur hexadécimal)" class="form-control" type="text" />
                                                            </div>
                                                        </div>
                                                    <?php echo $this->Form->end(['label' => 'Modifier', 'class' => 'btn btn-success pull-right']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($router == 'forum'): ?>
                        <p>Surement dans une prochaine mise à jour ...</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $("#dropdown").change(function () {
        if ($("#background-color").is(':checked')) {
            $("#type-dropdown").removeClass('hidden');
        } else {
            $("#type-dropdown").addClass('hidden');
        }
        if ($("#background-image").is(':checked')) {
            $("#type-dropdown2").removeClass('hidden');
        } else {
            $("#type-dropdown2").addClass('hidden');
        }
    });
</script>