<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
?>
<div class="main-wrapper login-body">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-lg-6 login-wrap">
                <div class="login-sec">
                    <div class="log-img">
                        <img
                            class="img-fluid"
                            src="/img/login-02.png"
                            alt="Logo"
                        />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 login-wrap-bg">
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <div class="account-logo">
                                    <a href="index.html"
                                    ><img src="/img/login-logo.png" alt
                                        /></a>
                                </div>
                                <h2>Login</h2>

                                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                                    <div class="form-group">
                                        <label>Email <span class="login-danger">*</span></label>
                                        <?php echo $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                                    </div>
                                    <div class="form-group">
                                        <label
                                        >Password <span class="login-danger">*</span></label
                                        >
                                        <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control pass-input']) ?>
                                        <span
                                            class="profile-views feather-eye-off toggle-password"
                                        ></span>
                                    </div>
                                    <div class="forgotpass">
                                        <div class="remember-me">
                                            <label
                                                class="custom_check mr-2 mb-0 d-inline-flex remember-me"
                                            >
                                                Remember me
                                                <input type="checkbox" name="radio"/>
                                                <span class="checkmark"></span>
                                                <?php  $form->field($model, 'rememberMe')->checkbox() ?>
                                            </label>
                                        </div>
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                            <div class="form-group">
                                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                                            </div>
                                <?php ActiveForm::end(); ?>

                                <div class="next-sign">
                                    <p class="account-subtitle">
                                        Need an account? <a href="#">Sign Up</a>
                                    </p>

                                    <div class="social-login">
                                        <a href="#"
                                        ><img src="/img/icons/login-icon-01.svg" alt
                                            /></a>
                                        <a href="#"
                                        ><img src="/img/icons/login-icon-02.svg" alt
                                            /></a>
                                        <a href="#"
                                        ><img src="/img/icons/login-icon-03.svg" alt
                                            /></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="site-login">-->
<!--    <div class="mt-5 offset-lg-3 col-lg-6">-->
<!--        <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!---->
<!--        --><?php //$form = ActiveForm::begin(['id' => 'login-form']); ?>
<!---->
<!--            --><?php //= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!---->
<!--            --><?php //= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--            --><?php //= $form->field($model, 'rememberMe')->checkbox() ?>
<!---->
<!--            <div class="form-group">-->
<!--                --><?php //= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
<!--            </div>-->
<!---->
<!--        --><?php //ActiveForm::end(); ?>
<!--    </div>-->
<!--</div>-->
