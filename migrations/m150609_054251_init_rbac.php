<?php

use yii\db\Schema;
use yii\db\Migration;

class m150609_054251_init_rbac extends Migration
{
    public function up()
    {
        $auth = Yii::$app->authManager;

        $viewPerm = $auth->createPermission('view');
        $managePerm = $auth->createPermission('manage');
        $auth->add($viewPerm);
        $auth->add($managePerm);

        $admin = $auth->createRole('admin');
        $user = $auth->createRole('user');
        $auth->add($admin);
        $auth->add($user);

        $auth->addChild($admin, $user);
        $auth->addChild($user, $viewPerm);
        $auth->addChild($admin, $managePerm);

        $auth->assign($admin, 100);
        $auth->assign($user, 101);
    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }
}
