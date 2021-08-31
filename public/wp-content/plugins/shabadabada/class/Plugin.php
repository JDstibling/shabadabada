<?php

namespace Shabadabada;
use Shabadabada\CustomPostType;
use Shabadabada\Deezer;
use Shabadabada\Models\Music;
use Shabadabada\Models\CoreModel;
use Shabadabada\Models\Game;

class Plugin
{
   public function __construct()
    {
        $this->registerCustomPostTypes();
        $this->registerCustomTaxonomies();
        $this->registerPostMetada();
    } 


    //recording custom post type
    public function registerCustomPostTypes()
    {
        $music = new CustomPostType('music', 'Music');
        $music->register();

        //!$this->flushRoutes();
    }


    
    public function registerCustomTaxonomies()
    {
        $type = new CustomTaxonomy('music-type','Music Type', ['music']);
        $type->register();
    }



    public function registerPostMetada()
    {
        $musicMeta = new PostMetadata('music', 'music-title', 'Music Title');
        $musicMeta->registerForm();

        $artistMeta = new PostMetadata('music', 'artist', 'Artist');
        $artistMeta->registerForm();

        $soundExcerptMeta = new PostMetadata('music', 'sound-excerpt', 'Sound excerpt');
        $soundExcerptMeta->registerForm();

        $soundExcerptMeta = new PostMetadata('music', 'album-name', 'Album name');
        $soundExcerptMeta->registerForm();

        $thumbnailMeta = new PostMetadata('music', 'album-thumbnail', 'Album thumbnail');
        $thumbnailMeta->registerThumbnail();
    }

    // ! test rewrite htacess
    // public function flushRoutes()
    // {
    //     global $wp_rewrite;
      
    //     $wp_rewrite->flush_rules();
    // }

    // call the plugin when is activated
    public function activate()
    {
        //!$this->flushRoutes();
        // set_time_limit(0);
        // Deezer import test
        //$deezerTest = new Deezer();
        //$deezerTest->import();

        Game::createTable();
        //$game = new Game();
        //$game->createTable();
    }

     // call the plugin when is deactivated
    public function deactivate()
    {
        //!$this->flushRoutes();
        //$music = new Music();
        //$music->deletePostMusic();

        Game::dropTable();
    }

}