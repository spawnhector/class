
    <x-card cardCount='5' :cardInfo="[
        'cardHead'=>['Approved Loans','Pending Loans','Applicants','Interview','Branch',],
        'cardBody'=>[
            ''.count($borrower::where('status','=','1')->get()).'',
            ''.count($borrower::where('status','=','0')->get()).'',
            ''.count($borrower::get()).'',
            ''.count($interviews::get()).'',
            '<div>'.count($branch).'</div>'
        ],
        'button'=>['Branch'=>[
                'modal_class'=>'card mt-5 pt-10 w-1/2',
                'btn_tag'=>'addbranch',
                'modal_header'=>'Add Branch',
                'btn_class'=>'ml-4',
                'button'=>'far fa-plus-square',
                'content'=>'admin.addbranch',
                'param'=>true,
                'var'=>'btn_tag',
                'var_param'=>'addbranch'
            ]
        ]
    ]">
    </x-card>