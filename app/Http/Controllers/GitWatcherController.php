<?php
/**
 * Created by PhpStorm.
 * User: deyzerman
 * Date: 05.12.18
 * Time: 15:03
 */

namespace App\Http\Controllers;

use Cz\Git\GitException;
use Cz\Git\GitRepository;

class GitWatcherController
{
    protected $repositories = [
        'test' => '/home/deyzerman/PhpstormProjects/test',
        'oodji' => '/home/deyzerman/PhpstormProjects/oodji/tp1_r'
    ];
    public function index() {
        $repositories = [];

        foreach ($this->repositories as $name => $path) {
            try {
                $repo = new GitRepository($path);
                $repositories[$name] = $repo->getCurrentBranchName();
            } catch (GitException $gitException) {
                dump($gitException->getMessage());
            }
        }

        return view('watcher.index', ['projects' => $repositories]);
    }
}