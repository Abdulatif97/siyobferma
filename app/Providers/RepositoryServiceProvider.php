<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\Contracts\AktRepository::class, \App\Repositories\AktRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\AktWriteOffRepository::class, \App\Repositories\AktWriteOffRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ApplicationRepository::class, \App\Repositories\ApplicationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\DiseaseRepository::class, \App\Repositories\DiseaseRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\DiseaseCategoryRepository::class, \App\Repositories\DiseaseCategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\DiseaseTestTemplateRepository::class, \App\Repositories\DiseaseTestTemplateRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\FileRepository::class, \App\Repositories\FileRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\HandbkRepository::class, \App\Repositories\HandbkRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ItemRepository::class, \App\Repositories\ItemRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ItemCategoryRepository::class, \App\Repositories\ItemCategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\MeasurementRepository::class, \App\Repositories\MeasurementRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\MessageRepository::class, \App\Repositories\MessageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\NormativeDocRepository::class, \App\Repositories\NormativeDocRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\OrganizationRepository::class, \App\Repositories\OrganizationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PersonRepository::class, \App\Repositories\PersonRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PPositionRepository::class, \App\Repositories\PPositionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\RoleRepository::class, \App\Repositories\RoleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SampleRepository::class, \App\Repositories\SampleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SampleGroupRepository::class, \App\Repositories\SampleGroupRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SampleGroupResultRepository::class, \App\Repositories\SampleGroupResultRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SoatoRepository::class, \App\Repositories\SoatoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\TranslationRepository::class, \App\Repositories\TranslationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\DepartmentRepository::class, \App\Repositories\DepartmentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\DiseaseTestTemplateParameterRepository::class, \App\Repositories\DiseaseTestTemplateParameterRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\SampleTemplateParameterValueRepository::class, \App\Repositories\SampleTemplateParameterValueRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\TaskRepository::class, \App\Repositories\TaskRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\MenuRepository::class, \App\Repositories\MenuRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PageRepository::class, \App\Repositories\PageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ProductRepository::class, \App\Repositories\ProductRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\PartnerRepository::class, \App\Repositories\PartnerRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\AdvantagesRepository::class, \App\Repositories\AdvantagesRepositoryEloquent::class);
        //:end-bindings:


        $this->app->bind(\App\Services\Contracts\RoleService::class, \App\Services\RoleService::class);
        $this->app->bind(\App\Services\Contracts\HandbkService::class, \App\Services\HandbkService::class);
        $this->app->bind(\App\Services\Contracts\OrganizationService::class, \App\Services\OrganizationService::class);
        $this->app->bind(\App\Services\Contracts\SoatoService::class, \App\Services\SoatoService::class);
        $this->app->bind(\App\Services\Contracts\PersonService::class, \App\Services\PersonService::class);
        $this->app->bind(\App\Services\Contracts\DepartmentService::class, \App\Services\DepartmentService::class);
        $this->app->bind(\App\Services\Contracts\PPositionService::class, \App\Services\PPositionService::class);
        $this->app->bind(\App\Services\Contracts\UserService::class, \App\Services\UserService::class);
        $this->app->bind(\App\Services\Contracts\MeasurementService::class, \App\Services\MeasurementService::class);
        $this->app->bind(\App\Services\Contracts\ItemCategoryService::class, \App\Services\ItemCategoryService::class);
        $this->app->bind(\App\Services\Contracts\ItemService::class, \App\Services\ItemService::class);
        $this->app->bind(\App\Services\Contracts\MessageService::class, \App\Services\MessageService::class);
        $this->app->bind(\App\Services\Contracts\ApplicationService::class, \App\Services\ApplicationService::class);
        $this->app->bind(\App\Services\Contracts\AktService::class, \App\Services\AktService::class);
        $this->app->bind(\App\Services\Contracts\DiseaseCategoryService::class, \App\Services\DiseaseCategoryService::class);
        $this->app->bind(\App\Services\Contracts\DiseaseService::class, \App\Services\DiseaseService::class);
        $this->app->bind(\App\Services\Contracts\NormativeDocService::class, \App\Services\NormativeDocService::class);
        $this->app->bind(\App\Services\Contracts\DiseaseTestTemplateService::class, \App\Services\DiseaseTestTemplateService::class);
        $this->app->bind(\App\Services\Contracts\DiseaseTestTemplateParameterService::class, \App\Services\DiseaseTestTemplateParameterService::class);
        $this->app->bind(\App\Services\Contracts\SampleService::class, \App\Services\SampleService::class);
        $this->app->bind(\App\Services\Contracts\SampleTemplateParameterValueService::class, \App\Services\SampleTemplateParameterValueService::class);
        $this->app->bind(\App\Services\Contracts\SampleGroupService::class, \App\Services\SampleGroupService::class);
        $this->app->bind(\App\Services\Contracts\TaskService::class, \App\Services\TaskService::class);
        $this->app->bind(\App\Services\Contracts\SampleGroupResultService::class, \App\Services\SampleGroupResultService::class);
        $this->app->bind(\App\Services\Contracts\AktWriteOffService::class, \App\Services\AktWriteOffService::class);
    }
}
