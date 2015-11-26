@servers(['dev' => 'vagrant@192.168.10.10'])

@task('list-projects', ['on' => 'dev'])
    cd projects
    ls -l
@endtask