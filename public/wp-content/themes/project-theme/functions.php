<?php
use App\Theme\CustomPostType;
use App\Theme\CustomTaxonomy;
use App\Theme\Enqueues;
use App\Theme\Reset;
use App\Theme\DisableComments;
use App\Theme\Utilities;
use App\Theme\ProjectConfig;

//Reset Wordpress (removes redundant scripts etc.)
add_action('init', 'resetWordpressDefaults');
function resetWordpressDefaults()
{
    (new DisableComments())->disableAllComments();
    (new Reset())->resetWordpressDefaults();
}

//Enqueue scripts and styles
add_action('wp_enqueue_scripts', 'enqueueScriptsAndStyles');
function enqueueScriptsAndStyles()
{
    new Enqueues();
}

//Post types
add_action('init', 'createPostTypes');
function createPostTypes()
{
    // (new CustomPostType())->createPostType('Event', 'Events');
}

//Taxonomies
add_action('init', 'createTaxonomies');
function createTaxonomies()
{
    // $eventType = (new CustomTaxonomy())->createTaxonomy("Event Type", "Event Types", "event_type");
    // register_taxonomy("event_type", array("event"), $eventType["args"]);
}

//Project configuration - menus, image crops etc.
add_action('init', 'projectConfig');
function projectConfig()
{
    (new ProjectConfig())->ProjectConfig();
}
