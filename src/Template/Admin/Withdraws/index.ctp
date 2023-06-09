<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Withdraw[]|\Cake\Collection\CollectionInterface $withdraws
 */
$this->assign('title', __('Manage Withdraws'));
$this->assign('description', '');
$this->assign('content_title', __('Manage Withdraws'));
?>

<?php
$withdrawal_methods = array_column_polyfill(get_withdrawal_methods(), 'name', 'id');
?>

<div class="row">

    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-cash-usd icon-lg text-success">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Publishers Available Balance') ?></p>
          <h6><?= display_price_currency($publishers_earnings); ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>
    
    
  <div class="col-md-6 col-lg-3 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-account-switch icon-lg text-info">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Referral Earnings') ?></p>
          <h6><?= display_price_currency($referral_earnings); ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>

      <div class="col-md-6 col-lg-3 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-alert-octagram icon-lg text-warning">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Pending Withdrawn') ?></p>
          <h6><?= display_price_currency($pending_withdrawn); ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-6 col-lg-3 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-approval icon-lg text-info">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Total Withdraw') ?></p>
          <h6><?= display_price_currency($tolal_withdrawn); ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>
    
</div>

<div class="box box-solid">
    <div class="box-body">
        <?php
        // The base url is the url where we'll pass the filter parameters
        $base_url = ['controller' => 'Withdraws', 'action' => 'index'];

        echo $this->Form->create(null, [
            'url' => $base_url,
            'class' => 'form-inline'
        ]);
        ?>

        <?=
        $this->Form->control('Filter.user_id', [
            'label' => false,
            'class' => 'form-control',
            'type' => 'text',
            'size' => 0,
            'placeholder' => __('User Id')
        ]);
        ?>

        <?=
        $this->Form->control('Filter.status', [
            'label' => false,
            'options' => withdraw_statuses(),
            'empty' => __('Status'),
            'class' => 'form-control'
        ]);
        ?>

        <?=
        $this->Form->control('Filter.method', [
            'label' => false,
            'options' => $withdrawal_methods,
            'empty' => __('Withdrawal Method'),
            'class' => 'form-control'
        ]);
        ?>

        <?= $this->Form->button(__('Filter'), ['class' => 'btn btn-default btn-sm']); ?>

        <?= $this->Html->link(__('Reset'), $base_url, ['class' => 'btn btn-link btn-sm']); ?>

        <?= $this->Form->end(); ?>

    </div>
</div>

<div class="box box-primary">
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', __('ID')) ?></th>
                    <th><?= __('User') ?></th>
                    <th class="date"><?= $this->Paginator->sort('created', __('Date')) ?></th>
                    <th><?= __('Status') ?></th>
                    <th><?= $this->Paginator->sort('publisher_earnings', __('Publisher Earnings')) ?></th>
                    <th><?= $this->Paginator->sort('referral_earnings', __('Referral Earnings')) ?></th>
                    <th><?= __('Total Amount') ?></th>
                    <th><?= __('Withdrawal Method') ?></th>
                    <th><?= __('Withdrawal Account') ?></th>
                    <th class="inline"><?= __('Action') ?></th>
                </tr>
                </thead>
                <?php foreach ($withdraws as $withdraw) : ?>
                    <tr>
                        <td><?= $this->Html->link($withdraw->id, array(
                                'action' => 'view',
                                $withdraw->id
                            )); ?></td>
                        <td><?= $this->Html->link($withdraw->user->username, array(
                                'controller' => 'Users',
                                'action' => 'view',
                                $withdraw->user->id,
                                'prefix' => 'admin'
                            )); ?></td>
                        <td><?= display_date_timezone($withdraw->created); ?></td>
                        <td><?= h(withdraw_statuses($withdraw->status)) ?></td>
                        <td><?= display_price_currency($withdraw->publisher_earnings); ?></td>
                        <td><?= display_price_currency($withdraw->referral_earnings); ?></td>
                        <td><?= display_price_currency($withdraw->amount); ?></td>
                        <td><?= (isset($withdrawal_methods[$withdraw->method])) ?
                                $withdrawal_methods[$withdraw->method] : $withdraw->method ?></td>
                        <td><?= nl2br(h($withdraw->account)); ?></td>
                        <td>
                            <?php if ($withdraw->status != 5) : ?>
                                <?= $this->Html->link(
                                    __("View"),
                                    ['action' => 'view', $withdraw->id],
                                    ['class' => 'btn btn-primary btn-xs']
                                ); ?>
                            <?php endif; ?>

                            <?php if ($withdraw->status == 2) : ?>
                                <?= $this->Form->postLink(
                                    __('Approve'),
                                    ['action' => 'approve', $withdraw->id],
                                    ['confirm' => __('Are you sure?'), 'class' => 'btn btn-success btn-xs']
                                ); ?>
                            <?php endif; ?>

                            <?php if ($withdraw->status == 1) : ?>
                                <?= $this->Form->postLink(
                                    __('Complete'),
                                    ['action' => 'complete', $withdraw->id],
                                    ['confirm' => __('Are you sure?'), 'class' => 'btn btn-success btn-xs']
                                ); ?>
                            <?php endif; ?>

                            <?php if (in_array($withdraw->status, [1, 2])) : ?>
                                <?= $this->Form->postLink(
                                    __('Cancel'),
                                    ['action' => 'cancel', $withdraw->id],
                                    ['confirm' => __('Are you sure?'), 'class' => 'btn btn-danger btn-xs']
                                ); ?>
                            <?php endif; ?>

                            <?php if (in_array($withdraw->status, [1, 2])) : ?>
                                <?= $this->Form->postLink(
                                    __('Return'),
                                    ['action' => 'returned', $withdraw->id],
                                    ['confirm' => __('Are you sure?'), 'class' => 'btn btn-danger btn-xs']
                                ); ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php unset($withdraw); ?>
            </table>
        </div>

        <ul>
            <li><?= __("Pending: The payment is being checked by our team.") ?></li>
            <li><?= __("Approved: The payment has been approved and is waiting to be sent.") ?></li>
            <li><?= __("Complete: The payment has been successfully sent to your account.") ?></li>
            <li><?= __("Cancelled: The payment has been cancelled.") ?></li>
            <li><?= __("Returned: The payment has been returned to the user account.") ?></li>
        </ul>

    </div><!-- /.box-body -->
</div>

<ul class="pagination">
    <?php
    $this->Paginator->setTemplates([
        'ellipsis' => '<li><a href="javascript: void(0)">...</a></li>',
    ]);

    if ($this->Paginator->hasPrev()) {
        echo $this->Paginator->prev('«');
    }

    echo $this->Paginator->numbers([
        'modulus' => 4,
        'first' => 2,
        'last' => 2,
    ]);

    if ($this->Paginator->hasNext()) {
        echo $this->Paginator->next('»');
    }
    ?>
</ul>
