<?php
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Dashboard', route('home'));
});

Breadcrumbs::for('group.index', function ($trail) {
    $trail->push('Groups', route('group.index'));
});

Breadcrumbs::for('group.show', function ($trail, \App\Models\Group $group) {
    $trail->parent('group.index');
    $trail->push($group->name, route('group.show',$group));
});

Breadcrumbs::for('group.user.add', function ($trail, \App\Models\Group $group) {
    $trail->parent('group.show',$group);
    $trail->push('Add Member', route('group.user.add',$group));
});

Breadcrumbs::for('group.user.deposits', function ($trail, \App\Models\Group $group, \App\Models\User $user) {
    $trail->parent('group.show',$group);
    $trail->push($user->fullname);
    $trail->push('deposits',route('group.user.deposits',compact('group','user')));
});

Breadcrumbs::for('group.user.loans', function ($trail, \App\Models\Group $group, \App\Models\User $user) {
    $trail->parent('group.show',$group);
    $trail->push($user->fullname);
    $trail->push('loans',route('group.user.loans',compact('group','user')));
});

Breadcrumbs::for('user.show', function ($trail, \App\Models\User $user) {
    $trail->push($user->fullname, route('user.show',$user));
});

Breadcrumbs::for('user.documents', function ($trail, $user) {
    $trail->parent('user.show',$user);
    $trail->push('Documents', route('user.documents',$user));
});

Breadcrumbs::for('user.banks', function ($trail, $user) {
    $trail->parent('user.show',$user);
    $trail->push('Banks', route('user.banks',$user));
});

