<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 6:15 PM.
 */
Breadcrumbs::register('admin.tax.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('Tax Manager', route('admin.tax.index'));
});

Breadcrumbs::register('admin.tax.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.tax.index');
    $breadcrumbs->push('Create Tax', route('admin.tax.create'));
});


Breadcrumbs::register('admin.tax.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.tax.index');
    $breadcrumbs->push('Edit Tax', route('admin.tax.edit'));
});

