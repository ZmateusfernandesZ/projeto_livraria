<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded p-4">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4" method="post">
            
        <?php if ($validacoes = flash()->get('validacoes_login')): ?>
                <div class="border-2 border-red-800 bg-red-900 text-white px-4 py-1 rounded-md text-sm font-bold">
                    <ul>
                        <li>Não foi possivel realizar a ação pelos erros:</li>

                        <?php foreach ($validacoes as $validacao): ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach; ?>
                    </ul>


                </div>
            <?php endif; ?>

            <div class="flex flex-col">

                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    name="email" 
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite o seu nome">

            </div>

            <div class="flex flex-col">

                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    name="senha" 
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite a sua senha">

            </div>

            <button type="submit" class="border-2 border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md hover:bg-stone-800">Logar</button>
        </form>
    </div>

    <div class="border border-stone-700 rounded p-4">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registrar</h1>
        <form class="p-4 space-y-4" method="POST" action="/registrar">

            <?php if ($validacoes = flash()->get('validacoes_registrar')): ?>
                <div class="border-2 border-red-800 bg-red-900 text-white px-4 py-1 rounded-md text-sm font-bold">
                    <ul>
                        <li>Não foi possivel realizar a ação pelos erros:</li>

                        <?php foreach ($validacoes as $validacao): ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach; ?>
                    </ul>


                </div>
            <?php endif; ?>



            <div class="flex flex-col">

                <label class="text-stone-400 mb-1">Nome</label>
                <input
                    type="text"
                    name="nome"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite seu nome">

            </div>

            <div class="flex flex-col">

                <label class="text-stone-400 mb-1">E-mail</label>
                <input
                    type="text"
                    name="email"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite seu e-mail">

            </div>

            <div class="flex flex-col">

                <label class="text-stone-400 mb-1">Confirme seu e-mail</label>
                <input
                    type="text"
                    name="email_confirmacao"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Confirme seu e-mail">

            </div>

            <div class="flex flex-col">

                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    name="senha"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Digite sua senha">

            </div>

            <button type="reset" class="border-2 border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md hover:bg-stone-800">Cancelar</button>

            <button type="submit" class="border-2 border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md hover:bg-stone-800">Registrar</button>

        </form>
    </div>

</div>