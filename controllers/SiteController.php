<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays production page.
     *
     * @return string
     */
    public function actionProduction()
    {
        return $this->render('production');
    }

    /**
     * Displays product page.
     *
     * @return string
     */
    public function actionProduct()
    {
        return $this->render('product');
    }

    /**
     * Displays construction parts page.
     *
     * @return string
     */
    public function actionConstructionParts()
    {
        return $this->render('construction-parts');
    }

    /**
     * Displays construction parts page.
     *
     * @return string
     */
    public function actionServices()
    {
        return $this->render('services');
    }

    /**
     * Displays thanks page.
     *
     * @return string
     */
    public function actionThanks()
    {
        return $this->render('thanks');
    }

    /**
     * Displays service page.
     *
     * @return string
     */
    public function actionService()
    {
        return $this->render('service');
    }

    /**
     * Displays object page.
     *
     * @return string
     */
    public function actionObject()
    {
        return $this->render('object');
    }
    /**
     * Displays about-company page.
     *
     * @return string
     */
    public function actionAboutCompany()
    {
        return $this->render('about-company');
    }
    /**
     * Displays vacancies page.
     *
     * @return string
     */
    public function actionVacancies()
    {
        return $this->render('vacancies');
    }

    /**
     * Displays error page.
     *
     * @return string
     */
    public function actionError()
    {
        return $this->render('error');
    }
    /**
     * Displays objects page.
     *
     * @return string
     */
    public function actionObjects()
    {
        return $this->render('objects');
    }
    /**
     * Displays articles page.
     *
     * @return string
     */
    public function actionArticles()
    {
        return $this->render('articles');
    }
}
