<?php

namespace App\Providers;

use Validator;
use Laravel\Spark\Spark;
use Illuminate\Http\Request;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Meta-data included in invoices generated by Spark.
     *
     * @var array
     */
    protected $invoiceWith = [
        'vendor' => 'Your Company',
        'product' => 'Your Product',
        'street' => 'PO Box 111',
        'location' => 'Your Town, 12345',
        'phone' => '555-555-5555',
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }

    /**
     * Customize Spark's new user registration logic.
     *
     * @return void
     */
    protected function customizeRegistration()
    {
        // Spark::validateRegistrationsWith(function (Request $request) {
        //     // Return Validator...
        // });

        // Spark::createUsersWith(function (Request $request) {
        //     // Return New User Instance...
        // });
    }

    /**
     * Customize the tabs on the settings screen.
     *
     * @return void
     */
    protected function customizeSettingsTabs()
    {
        Spark::settingsTabs()->configure(function ($tabs) {
            return [
                $tabs->profile(),
                $tabs->security(),
                $tabs->subscription(),
                // $tabs->make('Name', 'view', 'fa-icon'),
            ];
        });
    }

    /**
     * Customize Spark's profile update logic.
     *
     * @return void
     */
    protected function customizeProfileUpdates()
    {
        // Spark::validateProfileUpdatesWith(function (Request $request) {
        //     // Return Validator...
        // });

        // Spark::updateProfilesWith(function (Request $request) {
        //     // Update $request->user()...
        // });
    }

    /**
     * Customize the subscription plans for the application.
     *
     * @return void
     */
    protected function customizeSubscriptionPlans()
    {
        Spark::free()
                ->features([
                    'Feature 1',
                    'Feature 2',
                    'Feature 3',
                ]);

        Spark::plan('Basic', 'stripe-id')->price(10)
                ->trialDays(7)
                ->features([
                    'Feature 1',
                    'Feature 2',
                    'Feature 3',
                ]);

        Spark::plan('Pro', 'stripe-id')->price(20)
                ->trialDays(7)
                ->features([
                    'Feature 1',
                    'Feature 2',
                    'Feature 3',
                ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
