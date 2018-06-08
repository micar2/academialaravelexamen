
<li class="<?php echo e(Request::is('posts*') ? 'active' : ''); ?>">
    <a href="<?php echo route('posts.index'); ?>"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>




<li class="<?php echo e(Request::is('categories*') ? 'active' : ''); ?>">
    <a href="<?php echo route('categories.index'); ?>"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="<?php echo e(Request::is('lessons*') ? 'active' : ''); ?>">
    <a href="<?php echo route('lessons.index'); ?>"><i class="fa fa-edit"></i><span>Lessons</span></a>
</li>

<li class="<?php echo e(Request::is('subjects*') ? 'active' : ''); ?>">
    <a href="<?php echo route('subjects.index'); ?>"><i class="fa fa-edit"></i><span>Subjects</span></a>
</li>

<li class="<?php echo e(Request::is('comentaries*') ? 'active' : ''); ?>">
    <a href="<?php echo route('comentaries.index'); ?>"><i class="fa fa-edit"></i><span>Comentaries</span></a>
</li>

<li class="<?php echo e(Request::is('documents*') ? 'active' : ''); ?>">
    <a href="<?php echo route('documents.index'); ?>"><i class="fa fa-edit"></i><span>Documents</span></a>
</li>

<li class="<?php echo e(Request::is('enrolments*') ? 'active' : ''); ?>">
    <a href="<?php echo route('enrolments.index'); ?>"><i class="fa fa-edit"></i><span>Enrolments</span></a>
</li>

