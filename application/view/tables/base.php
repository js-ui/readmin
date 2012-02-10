<h5></h5>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th><input type="checkbox" /></th>
            <th>type</th>
            <th>name</th>
            <th>value</th>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($items)) : ?>
        <?php foreach ($items as $name => $value) : ?>
        <tr>
            <td><input type="checkbox" /></td>
            <td>S</td>
            <td><?php echo htmlspecialchars($name, ENT_QUOTES) ?></td>
            <td><?php echo htmlspecialchars($value, ENT_QUOTES) ?></td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
