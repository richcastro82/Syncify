@include('admin.partials.text-input',['name'=>'merchant_id','label'=>__lang('payfast-merchant-id')])
@include('admin.partials.text-input',['name'=>'merchant_key','label'=>__lang('payfast-merchant-key')])
@include('admin.partials.select',['name'=>'mode','label'=>__lang('mode'),'options'=>['1'=>__lang('live'),'0'=>__lang('sandbox')]])
@include('admin.partials.select',['name'=>'debug','label'=>__lang('debug'),'options'=>['1'=>__lang('yes'),'0'=>__lang('no')]])
@include('admin.partials.text-input',['name'=>'passphrase','label'=>__lang('payfast-secure-passphrase')])
