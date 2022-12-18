<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Article;
use Core\Partials\CheckLog;


// Gestion du blog par un employé
class BlogController extends Controller
{
    //Affichage des articles
    public function showArticle()
    {
        $article = new Article;
        $articles = $article->findAll();
        $this->renderView('blog/index', compact('articles'));
    }

    //Affichage d'un article au complet
    public function detailArticle()
    {
        $id = $_GET['id'];
        $article = new Article;
        $article_blog = $article->find($id);
        $this->renderView('blog/details', compact('article_blog', 'id'));
    }

    //Modification d'un article
    public function editArticle()
    {
        CheckLog::checkIsEmployee();
        $id = $_GET['id'];
        $article_to_edit = new Article;
        $edit_temp = $article_to_edit->findOneForEdit(['id' => $id]);
        if (isset($_POST['submit'])) {
            $article_to_edit->editArticleBlog($id);
            $result = $article_to_edit->editArticleBlog($id);
            if (count($_FILES) > 0) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";
                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                    $folder = "uploads/blog/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $destination = $folder . $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    $_POST['image'] = $destination;
                }
            }
            if ($result) {
                $message =  "Modification bien effectuée";
            } else {
                $message =  "échec de l'édit";
            };
            $article_to_edit->findOneForEdit(['id' => $id]);
            $edit_temp = $article_to_edit->findOneForEdit(['id' => $id]);
            $this->renderView(
                'blog/edit',
                compact('message', 'id', 'edit_temp')
            );
        }
        $this->renderView('blog/edit', compact('id', 'edit_temp'));
    }


    //Ajout d'un article
    public function insertArticle()
    {
        CheckLog::checkIsEmployee();
        if (isset($_POST['submit'])) {
            $article = new Article;
            $article->setTitle(htmlentities($_POST['title']));
            $article->setContent(($_POST['content']));
            $article->setPhoto_article($_FILES['image']['name']);
            if (count($_FILES) > 0) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";
                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                    $folder = "uploads/blog/";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $destination = $folder . $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    $_POST['image'] = $destination;
                }
            }
            $result = $article->insertArticle();
            if ($result) {
                $message =  "Insertion bien effectuée";
            } else {
                $message =  "échec";
            };
            $this->renderView('blog/insert', compact('message'));
        }
        $this->renderView('blog/insert');
    }
}
