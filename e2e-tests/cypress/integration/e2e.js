function login() {
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
		login();
		activatePlugin();
	});
	
	after(deactivatePlugin);

	it('displays the plugin in the admin section', () => {
		cy.visit('/wp-admin/plugins.php');
		cy.contains('Wp Reading Time 2020');
	});

	it.skip('displays the reading time for a post on the homepage', () => {
		cy.visit('/');
		cy.contains('Reading time');
	});
});
