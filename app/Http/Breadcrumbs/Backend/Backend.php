<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('admin.dashboard'));
});

require __DIR__ . '/Access.php';
require __DIR__ . '/LogViewer.php';
require __DIR__ . '/Tax.php';
