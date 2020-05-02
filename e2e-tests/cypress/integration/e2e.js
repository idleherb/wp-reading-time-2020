function login() {
	console.log(Cypress.env('wp_user') + ' ' + Cypress.env('wp_password'));
	cy.visit('/wp-login.php');
	cy.get('#user_login')
		.clear()
		.type(Cypress.env('wp_user'));
	cy.get('#user_pass')
		.clear()
		.type(Cypress.env('wp_password'));
	cy.get('#wp-submit').click();
}

function activatePlugin() {
	cy.visit('/wp-admin/plugins.php');
	cy.get('#the-list')
		.contains('Activate')
		.click();
	cy.contains('Plugin activated');
}

function deactivatePlugin() {
	cy.get('#the-list')
		.contains('Deactivate')
		.click();
	cy.contains('Plugin deactivated');
}

describe('admin panel', () => {
	before(() => {
		console.log('step 1');
		login();
		console.log('step 2');
		activatePlugin();
		console.log('step 3');
	});
	
	after(deactivatePlugin);

	it('displays the plugin in the admin section', () => {
		cy.visit('/wp-admin/plugins.php');
		console.log('step 4');
		cy.contains('Wp Reading Time 2020');
	});

	it.skip('displays the reading time for a post on the homepage', () => {
		cy.visit('/');
		cy.contains('Reading time');
	});
});
