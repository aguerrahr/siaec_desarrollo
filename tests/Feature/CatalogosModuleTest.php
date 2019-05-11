<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CatalogosModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_catalogo_estatus_list_page()
    {
        $response = $this->get('/catalogos/estatus');
        $response->assertStatus(200);
        $response->assertSee('Esta es la página del catálogo Estatus');
    }

    /** @test */
    function it_loads_the_catalogo_plantel_list_page()
    {
        $response = $this->get('/catalogos/planteles');
        $response->assertStatus(200);
        $response->assertSee('CRUD Plan de estudios');
        $response->assertSee('Plan 1');
        $response->assertSee('Plan 2');

    }
    /** @test */
    function it_loads_the_catalogo_plantel_list_page_empty()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/catalogos/planteles?empty');
        $response->assertStatus(200);
        $response->assertSee('Noy hay listado de planes de estudios.');
    }
    /** @test */
    function it_loads_the_catalogo_plantel_show_page()
    {
        $response = $this->get('/catalogos/planteles/muestra');
        $response->assertStatus(200);
        $response->assertSee('Esta es la página de show del catálogo Plan');
    }
    /** @test */
    function it_loads_the_catalogo_plantel_create_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/catalogos/planteles/crear');
        $response->assertStatus(200);
        $response->assertSee('Esta es la página de Crear del catálogo Plan');
    }
    /** @test */
    function it_loads_the_catalogo_plantel_welcome_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/catalogos/planteles/welcome');
        $response->assertStatus(200);
        $response->assertSee('Esta es la pagina inicial del catálogo Planes de Estudio');
    }

}
