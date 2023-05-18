<?php

namespace App\Console\Commands;
use Illuminate\Database\Eloquent\ModelNotFoundException;  
use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;

class SymbolCodeProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:category {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        try{
            $result = Category::query()->where('id', '=', $this->argument('id'))->firstOrFail()->products;  
        }
        catch(ModelNotFoundException $e)
        {
            echo $e->getMessage();
        }
        if(count($result)==0){
            throw new ModelNotFoundException('this category has zero products');
        }
        foreach($result as $temp_obj)
            $this->info('symbol_code = '. $temp_obj['symbol_code']);
            
            
    }
}
